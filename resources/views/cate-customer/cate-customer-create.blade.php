@extends('default-create')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Thêm nhóm khách hàng</h3>
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
                        <form class="form-label-left input_mask" action="{{Route('pcreate_cate_customer') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên nhóm khách hàng</label>
                                <input type="text" class="form-control" name="name" placeholder="Tên nhóm khách hàng">

                            </div>
                            <div class="form-group">
                                <label>Ưu đãi (%)</label>
                                <input type="number" class="form-control" name="promotion" placeholder="Ưu đãi" required>

                            </div>

                            <div class="ln_solid"></div>

                            <div align="center">
                                <a href="../cate-customer">
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
