@extends('default-create')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Thêm nhân viên</h3>
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
                        <form class="form-label-left input_mask" action="{{url('staff')}}" method="POST">
                            @csrf
                            <div class="form-group ">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">

                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Họ nhân viên</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="Tên nhân viên">
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Tên nhân viên</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Tên nhân viên">
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <label>Chức vụ</label>
                                    <select class="form-control" name="position" required>
                                        <option value="" disabled selected>Chọn...</option>
                                        <option value="0">Quản trị viên</option>
                                        <option value="1">Nhân viên</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Giới tính:</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="" disabled selected>Chọn...</option>
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                        <option value="2">Khác</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Ngày sinh</label>
                                    <input type="date" class="form-control" name="date_of_birth">
                                </div>
                                <div class="col-md-6 col-sm-6  ">
                                    <label>Điện thoại</label>
                                    <input type="number" class="form-control" name="phone_number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6  ">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group ">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" placeholder="Địa chỉ" name="address">

                            </div>

                            <div class="ln_solid"></div>

                            <div align="center">
                                <a href="./">
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
