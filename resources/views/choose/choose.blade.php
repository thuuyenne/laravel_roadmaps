@extends('default')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DANH SÁCH NHÂN VIÊN</h3>
            </div>

            <div class="title_right">
                <div class="col-md-10 col-sm-10  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" id="search" class="form-control" placeholder="Tìm kiếm...">
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
                            <!-- <a href="staff/create" class="">
                                <i class="fa fa-plus action-icon"></i>
                            </a> -->
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
                                                <th>Lộ trình ( Điểm đi - Điểm đến )</th>
                                                <th>Người đăng</th>
                                                <th>Người chọn</th>
                                                <th>Tình trạng</th>
                                                <th>Số ghế còn lại</th>
                                                <th colspan="2" width="5%"></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $i=1 ?>
                                            @foreach ($choose as $chse)

                                            <tr>
                                                <td>
                                                    {{$i++}}
                                                </td>
                                                <td>
                                                    {{$chse->start_point}} - {{$chse->end_point}}
                                                </td>
                                                <td>
                                                    @if ($chse->customer_ID==1)
                                                       
                                                            chủ xe
                                                       
                                                    @elseif ($chse->customer_ID==0)
                                                        
                                                            hành khách
                                                       
                                                    @endif

                                                </td>
                                                <td>
                                                    {{$sta->last_name}}
                                                </td>
                                                <td>
                                                    @if ($chse->status==1)
                                                        đang hoạt động
                                                    @elseif ($chse->status==0)
                                                            dừng hoạt động
                                                    @endif

                                                </td>
                                                <!-- <td>
                                                    {{$chse}}
                                                </td> -->
                                              
                                                <!-- <td>
                                                    <form method="POST" action="{{url('choose/'.$chse->roadmap_ID)}}"
                                                        onsubmit="return deleteAction();">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button style="padding: 0; border:none; background: none;"
                                                            type="submit">
                                                            <i class="fa fa-trash action-icon"></i>
                                                        </button>
                                                    </form>

                                                </td> -->
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

        <div class="row">
            <div class="col-md-12 col-sm-12 " style="position: relative">
                <span class="pagi">{{$choose->links()}}</span>
            </div>
        </div>

    </div>
</div>
</div>

<script>
    $('#search').on('keyup', function() {
            $value=$(this).val();
            $.ajax({
                    type: 'get',
                    url: "{{ URL::to('searchStaff')}}",
                    data: {
                        'search': $value
                    },
                    success:function(data){
                        $('tbody').html(data);
                    }
                });
            })
</script>

@endsection
