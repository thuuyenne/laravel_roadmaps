@extends('default')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DANH SÁCH HÌNH THỨC THANH TOÁN</h3>
            </div>

            <div class="title_right">
                <div class="col-md-10 col-sm-10  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" disabled>Tìm</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                @if (session('success'))
                <div class="x_panel">
                    <div class="alert alert-success">
                        {{ session('success') }}
                        <ul class="nav navbar-right panel_toolbox">

                            <li>
                                <a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
                @if (session('error'))
                <div class="x_panel">
                    <div class="alert alert-error">
                        {{ session('error') }}
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">

                    <div class="x_title">

                        <ul class="nav navbar-right panel_toolbox">
                            <a href="payment/create" class="">
                                <i class="fa fa-plus action-icon"></i>
                            </a>
                        </ul>
                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable" class="table table-striped" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã loại thanh toán</th>
                                                <th>Tên</th>
                                                <th colspan="2" width="5%"></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $i=1 ?>
                                            @foreach ($payments as $pay)
                                            <tr>
                                                <td>
                                                    {{$i++}}
                                                </td>
                                                <td>
                                                    {{$pay->payment_ID}}
                                                </td>
                                                <td>
                                                    {{$pay->name}}
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{url('payment/'.$pay->payment_ID.'/edit')}}"
                                                        class="">
                                                        <i class="fa fa-edit action-icon"></i>
                                                    </a>

                                                </td>
                                                <td>
                                                    <form method="POST"
                                                    action="{{url('payment/'.$pay->payment_ID)}}"
                                                    onsubmit="return deleteAction();">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="padding: 0; border:none; background: none;"
                                                        type="submit">
                                                        <i class="fa fa-trash action-icon"></i>
                                                    </button>
                                                </form>



                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


@endsection
