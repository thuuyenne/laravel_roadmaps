@extends('default-edit')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Sửa thông tin khách hàng</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">
                    <div class="x_title">

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br />
                        @foreach ($customers as $cus)

                        @endforeach

                        <form class="form-label-left input_mask" action="{{url('customer/'.$cus->customer_ID)}}"
                            method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                            <div class="col-md-6 col-sm-6  ">
                                    <label>Tên đăng nhập</label>
                                    <input type="text" class="form-control" name="name" value="{{$cus->username}}"
                                        placeholder="Tên khách hàng" disabled>
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Họ khách hàng</label>
                                    <input type="text" class="form-control" name="first_name" value="{{$cus->first_name}}"
                                        placeholder="Tên khách hàng">
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Tên khách hàng</label>
                                    <input type="text" class="form-control" name="last_name" value="{{$cus->last_name}}"
                                        placeholder="Tên khách hàng">
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Nhóm khách hàng</label>
                                    <select class="form-control" name="cate_customer_ID" required>
                                        @foreach ($cate_customer as $cate_cus)
                                        <option value="{{$cate_cus->cate_customer_ID}}" 
                                            @if($cate_cus->cate_customer_ID==$cus->cate_customer_ID)
                                            selected
                                            @endif
                                            >{{$cate_cus->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Giới tính:</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="0" @if ($cus->gender==0)
                                            selected
                                            @endif
                                            >Nam</option>
                                        <option value="1" @if ($cus->gender==1)
                                            selected
                                            @endif
                                            >Nữ</option>
                                        <option value="2" @if ($cus->gender==2)
                                            selected
                                            @endif>Khác</option>

                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{$cus->email}}">
                                </div>
                                
                                
                            </div>
                            <div class="form-group">
                                    <label>Điện thoại</label>
                                    <input type="number" class="form-control" name="phone_number"
                                        value="{{$cus->phone_number}}">
                                </div>

                            <div class="form-group ">
                                <label for="">Địa chỉ</label>
                                <textarea class="form-control" name="address">{{$cus->address}}</textarea>
                            </div>



                            <div class="form-group ">
                                <label for="">Nhân viên</label>
                                <input type="text" class="form-control" value="@foreach ($staff as $sta)@if ($sta->staff_ID==$cus->staff_ID){{$sta->username}}
                                @endif @endforeach" disabled>
                            </div>

                            <div class="ln_solid"></div>

                            <div align="center">
                                <a href="../">
                                    <button type="button" class="btn btn-primary">Hủy</button>
                                </a>
                                <button class="btn btn-primary" type="reset">Làm lại</button>
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->

@endsection
