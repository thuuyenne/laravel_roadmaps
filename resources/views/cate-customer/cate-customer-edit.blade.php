@extends('default-edit')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Sửa thông tin nhóm khách hàng</h3>
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
                        @foreach ($cate_customer as $cate_cus)

                        @endforeach
                        <form class="form-label-left input_mask"
                            action="{{Route('pedit_cate_customer',['cate_customer_ID' => $cate_customer->cate_customer_ID])}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Tên nhóm khách hàng</label>
                                <input type="text" class="form-control" name="name" value="{{$cate_cus->name}}"
                                    placeholder="Tên nhóm khách hàng">

                            </div>

                            <div class="form-group">
                                <label>Ưu đãi (%)</label>
                                <input type="text" class="form-control" name="promotion"
                                    value="{{$cate_cus->promotion}}" placeholder="Ưu đãi">
                            </div>


                            <div class="ln_solid"></div>

                            <div align="center">
                                <a href="../../cate-customer">
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
