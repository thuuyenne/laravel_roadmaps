@extends('default')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DANH SÁCH KHÁCH HÀNG</h3>
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
                            <a href="customer/create" class="">
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
                                                <th>Mã khách hàng</th>
                                                <th>Họ</th>
                                                <th>Tên</th>
                                                <th>Năm sinh</th>
                                                <th>Giới tính</th>
                                                <th>Số điện thoại</th>
                                                <th>email</th>
                                                <th>Địa chỉ</th>
                                                <th>Nhóm</th>
                                                <th>Nhân viên</th>
                                                <th colspan="2" width="5%"></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php $i=1 ?>

                                            @if ($_SESSION['position']==1)
                                            @foreach ($customer as $cus)

                                            <tr>
                                                <td>
                                                    {{$i++}}
                                                </td>
                                                <td>
                                                    {{$cus->id}}
                                                </td>
                                                <td>
                                                    {{$cus->username}}
                                                </td>
                                                <td>
                                                    {{$cus->first_name}}
                                                </td>
                                                <td>
                                                    {{$cus->last_name}}
                                                </td>
                                                <td>
                                                    @if ($cus->gender==0)
                                                    Nam
                                                    @elseif ($cus->gender==1)
                                                    Nữ
                                                    @elseif ($cus->gender==2)
                                                    Khác
                                                    @endif

                                                </td>
                                                <td>
                                                    {{$cus->phone_number}}
                                                </td>
                                                <td>
                                                    {{$cus->email}}
                                                </td>
                                                <td>
                                                    {{$cus->address}}
                                                </td>
                                                <!-- <td>
                                                    @foreach ($cate_customer as $cate_cus)
                                                    @if ($cate_cus->cate_customer_ID==$cus->cate_customer_ID)
                                                    {{$cate_cus->name}}
                                                    @endif
                                                    @endforeach
                                                </td> -->

                                                <!-- <td>
                                                    @foreach ($staff as $sta)
                                                    @if ($sta->staff_ID==$cus->staff_ID)
                                                    {{$sta->username}}
                                                    @endif
                                                    @endforeach
                                                </td> -->

                                                <td class="text-right">
                                                    <a href="{{url('customer/'.$cus->id.'/edit')}}" class="">
                                                        <i class="fa fa-edit action-icon"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form method="POST" class="delete"
                                                        action="{{url('customer/'.$cus->id)}}"
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
                                            @elseif ($_SESSION['position']==2)
                                            @foreach ($customers as $cus)

                                            <tr>
                                                <td>
                                                    {{$i}}
                                                </td>
                                                <td>
                                                    {{$cus->id}}
                                                </td>
                                                <td>
                                                    {{$cus->username}}
                                                </td>
                                                <td>
                                                    {{$cus->first_name}}
                                                </td>
                                                <td>
                                                    {{$cus->last_name}}
                                                </td>
                                                <td>
                                                    @if ($cus->gender==0)
                                                    Nam
                                                    @elseif ($cus->gender==1)
                                                    Nữ
                                                    @elseif ($cus->gender==2)
                                                    Khác
                                                    @endif

                                                </td>
                                                <td>
                                                    {{$cus->phone_number}}
                                                </td>
                                                <td>
                                                    {{$cus->email}}
                                                </td>
                                                <td>
                                                    {{$cus->address}}
                                                </td>
                                                <!-- <td>
                                                    @foreach ($cate_customer as $cate_cus)
                                                    @if ($cate_cus->cate_customer_ID==$cus->cate_customer_ID)
                                                    {{$cate_cus->name}}
                                                    @endif
                                                    @endforeach
                                                </td>


                                                <td>
                                                    @foreach ($staff as $sta)
                                                    @if ($sta->staff_ID==$cus->staff_ID)
                                                    {{$sta->username}}
                                                    @endif
                                                    @endforeach
                                                </td> -->

                                                <td class="text-right">
                                                    <a href="{{url('customer/'.$cus->id.'/edit')}}" class="">
                                                        <i class="fa fa-edit action-icon"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form method="POST" class="delete"
                                                        action="{{url('customer/'.$cus->id)}}"
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
                                            @endif

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
                <span class="pagi">{{$customers_admin->links()}}</span>
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
                    url: "{{ URL::to('searchCustomer') }}",
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
