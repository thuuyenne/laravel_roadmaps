@extends('default-edit')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Sửa thông tin lộ trình</h3>
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
                        @foreach ($roadmaps as $roadmap)

                        @endforeach
                        <form class="form-label-left input_mask" action="{{url('roadmap/'.$roadmap->roadmap_ID)}}"
                            method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group ">
                                <label for="">Thời gian khởi hành</label>
                                <input type="text" class="form-control" name="username" value="{{$roadmap->start_time}}"
                                    disabled>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Họ nhân viên</label>
                                    <input type="text" class="form-control" name="frist_name" value="{{$roadmap->first_name}}"
                                        placeholder="Tên nhân viên">
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Tên nhân viên</label>
                                    <input type="text" class="form-control" name="last_name" value="{{$roadmap->last_name}}"
                                        placeholder="Tên nhân viên">
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Chức vụ</label>
                                    <select class="form-control" name="position" required>
                                        <option value="0" @if($roadmap->position==0)selected @endif>
                                            Quản trị viên
                                        </option>
                                        <option value="1" @if($roadmap->position==1)selected @endif>
                                            Nhân viên
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Giới tính:</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="0" @if ($roadmap->gender==0)
                                            selected
                                            @endif
                                            >Nam</option>
                                        <option value="1" @if ($roadmap->gender==1)
                                            selected
                                            @endif
                                            >Nữ</option>
                                        <option value="2" @if ($roadmap->gender==2)
                                            selected
                                            @endif>Khác</option>

                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Ngày sinh</label>
                                    <input type="date" class="form-control" name="date_of_birth"
                                        value="{{$roadmap->phone_number}}">
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Điện thoại</label>
                                    <input type="number" class="form-control" name="phone_number"
                                        value="{{$roadmap->phone_number}}">
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{$roadmap->phone_number}}">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="">Phương tiện</label>
                                <input type="text" class="form-control" name="address" value="{{$roadmap->trans_}}"
                                    placeholder="Địa chỉ">

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
