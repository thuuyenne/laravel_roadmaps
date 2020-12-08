@section('title', 'Lộ trình')
@extends('default')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DANH SÁCH LỘ TRÌNH</h3>
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
                <!-- <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="btnBackUp">
                        <i class="fas fa-save"></i>Sao lưu</button>
                </div> -->
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


                        <!-- <ul class="nav navbar-right panel_toolbox">
                            <a href="roadmap/create" class="">
                                <i class="fa fa-plus action-icon"></i>
                            </a>
                        </ul> -->
                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card-box table-responsive" >

                                    <table id="datatable" class="table table-striped " style="width:100%">

                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>Stt</th>
                                                <th>Điểm đi</th>
                                                <th>Điểm đến</th>
                                                <th>Khoảng cách(km)</th>
                                                <th>Điều khoản</th>
                                                <th>khởi hành lúc</th>
                                                <th>Phương tiện</th>
                                                <th>Tài khoản</th>
                                                <th>Giá(vnđ)</th>
                                                <th colspan="2" width="5%"></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $i=1 ?>
                                            @foreach ($roadmaps as $roadmap)

                                            <tr>
                                                <td>
                                                    {{$i++}}
                                                </td>
                                                <!-- <td>
                                                    {{$roadmap->roadmap_ID}}
                                                </td> -->
                                                <td>
                                                    {{$roadmap->start_point}}
                                                </td>
                                                <td>
                                                    {{$roadmap->end_point}}
                                                </td>
                                                <td>
                                                    {{number_format($roadmap->distance)}}
                                                </td>
                                                <td>
                                                    {{$roadmap->rule}}
                                                </td>

                                                <td>
                                                    {{$roadmap->start_time}}
                                                </td>

                                                <td>
                                                    {{$roadmap->usevehi}}
                                                </td>

                                                <td class="text-right">
                                                    <a href="{{url('roadmap/'.$roadmap->roadmap_ID.'/edit')}}"
                                                        class="">
                                                        <i class="fa fa-edit action-icon"></i>
                                                    </a>

                                                </td>
                                                <td>
                                                    <form method="POST"
                                                    action="{{url('roadmap/'.$roadmap->roadmap_ID)}}"
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

        <div class="row">
            <div class="col-md-12 col-sm-12 " style="position: relative">
                <span class="pagi">{{$roadmaps->links()}}</span>
            </div>
        </div>

    </div>
</div>
@endsection

@section('jsScript')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

       $(document).ready(function($) {

            $('#btnBackUp').click(function(event) {
                window.location.href="/carsh-luanvan/export.html";
            });

            $('.edit').click(function(event) {
                var id = $(this).data("id");
                window.location.href="/carsh-luanvan/show/" + id;
            });

            $('.delete').click(function(event) {
                var res = confirm('Bạn muốn xóa lộ trình này???');
                if(res){
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");
                    $.ajax({
                        url: "/carsh-luanvan/roadmap-delete/" + id,
                        type: 'DELETE',
                        dataType: 'json',
                        data:  {
                            "id": id,
                            "_token": token,
                        },
                        contentType: "application/json; charset=utf-8",
                        success: function () {
                            PNotify.success({
                               title: 'THÔNG BÁO!!',
                               // stack: { dir1: "up", dir2: "left", firstpos1: 25, firstpos2: 25 },
                               text: 'Xóa lộ trình thành công.'
                           });

                            window.location.href="/carsh-luanvan/roadmap.html";
                        }
                    });
                    

                }

            });
        });
    </script>

@endsection

