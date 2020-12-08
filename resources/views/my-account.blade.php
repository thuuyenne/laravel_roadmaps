@extends('default')
@section('content')
<link href="{{('/vnpt/public/css/profile.css')}}" rel="stylesheet">

<!-- page content -->
<div class="right_col" role="main">

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            @if (session('stafftus-success'))
            <div class="alert alert-success">
                {{ session('stafftus-success') }}
            </div>
            @endif

            @if (session('stafftus-error'))
            <div class="alert alert-error">
                {{ session('stafftus-error') }}
            </div>
            @endif

        </div>
    </div>

    <h1 class="text-center">THÔNG TIN CÁ NHÂN</h1>
    <div class="form-group avatar">
        <figure class="">
            <img class="img-rounded img-responsive img-profile" src="{{('/vnpt/public/img.png')}}" alt=""><a></a>
        </figure>
    </div>



    <div class="clearfix"></div>
    <div class="x_content">
        <br />
        <form class="form-label-left input_mask" action="{{url('update-account')}}" method="POST"
            onsubmit="return checkChangePass();">
            {{-- @method('PUT') --}}
            @csrf
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>

                <div class="col-md-6 col-sm-6 ">
                    <input type="text" value="{{$staff->username}}" class="form-control " disabled>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Họ </span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" value=" {{$staff->first_name}}" class="form-control " disabled>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Tên </span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" value=" {{$staff->last_name}}" class="form-control " disabled>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày sinh</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" value=" {{$staff->date_of_birth}}" class="form-control " disabled>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Chức
                    vụ</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text"
                        value="@if($staff->id_role==1)Quản trị viên @elseif($staff->id_role==2)Nhân viên @endif"
                        class="form-control" disabled>

                </div>
            </div>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Số điện
                    thoại</label>

                <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="phone_number" value="{{$staff->phone_number}}" class="form-control">

                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">email
                    thoại</label>

                <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="phone_number" value="{{$staff->email}}" class="form-control">

                </div>
            </div>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ</label>

                <div class="col-md-6 col-sm-6 ">
                    <textarea name="address" class="form-control">{{$staff->address}}</textarea>

                </div>
            </div>
            <div class="item form-group">

                <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                <div class="col-md-6 col-sm-6 ">
                    <br>
                    <details>
                        <summary>Đổi mật khẩu</summary>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="old_password">Mật khẩu cũ:</label>
                                    <input type="password" name="old_password" id="old_password" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="new_password">Mật khẩu mới:</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="re_new_password">Nhập lại mật khẩu mới:</label>
                                    <input type="password" name="re_password" id="re_new_password" class="form-control">
                                </div>
                            </div>
                        </div>

                    </details>
                    <p id="change_password_error" style="color: red"></p>
                </div>

            </div>

            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <div align="center">
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
                </div>
            </div>

        </form>

        <script>
            function checkChangePass() {
            var new_password = document.getElementById('new_password').value;
            var re_new_password = document.getElementById('re_new_password').value;
            if (new_password != re_new_password) {
                document.getElementById('change_password_error').innerHTML = 'Vui lòng nhập mật khẩu giống nhau!'
                return false;
            }
            return true;
        }
        </script>

    </div>
</div>
</div>
</section>
</div>
</div>
<!-- /page content -->

@endsection
