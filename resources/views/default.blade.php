<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>QUẢN LÝ WEBSITE CARSHARING</title>

    <!-- Bootstrap -->
    <link href="{{('/carsh-luanvan/public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{('/carsh-luanvan/public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{('/carsh-luanvan/public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{('/carsh-luanvan/public/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{('/carsh-luanvan/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{('/carsh-luanvan/public/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{('/carsh-luanvan/public/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{('/carsh-luanvan/public/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{('/carsh-luanvan/public/css/style.css')}}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{('/carsh-luanvan/public/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <a href="my-account"><img src="{{('/carsh-luanvan/public/img.png')}}" alt="..."
                                    class="img-circle profile_img" width="100%"></a>
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>
                                @isset($_SESSION['staff'])
                                {{$_SESSION['staff']}}
                                @endisset
                            </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                @isset($_SESSION['id_role'])
                                @if ($_SESSION['id_role']==1)
                                <li><a href="statistic"><i class="fa fa-bar-chart-o"></i> Thống kê </a></li>
                                @endif
                                @endisset
                                <li><a href="customer"><i class="fa fa-user"></i> Khách hàng </a></li>
                                @isset($_SESSION['id_role'])
                                @if ($_SESSION['id_role']==1)
                                <li><a href="cate-customer"><i class="fa fa-users"></i>Nhóm khách hàng </a></li>
                                <li><a href="payment"><i class="fa fa-map-marker"></i> Hình thức thanh toán </a></li>
                                <li><a href="roadmap"><i class="fa fa-file-text-o"></i> Lộ trình </a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i> Nhóm Lộ Trình </a></li>
                                @endif
                                @endisset
                                <li><a href="choose"><i class="fa fa-file-text-o"></i> Lộ trình đã chọn </a></li>
                                <li><a href="delivery"><i class="fa fa-car"></i> Slinder</a></li>
                                <li><a href="area"><i class="fa fa-map-marker"></i> Khu vực </a></li>
                               
                                @isset($_SESSION['id_role'])
                                @if ($_SESSION['id_role']==1)
                                <li><a href="staff"><i class="fa fa-users"></i> Nhân viên </a></li>
                                @endif
                                @endisset
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">
                                    @isset($_SESSION['staff'])
                                    {{$_SESSION['staff']}}
                                    @endisset
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="my-account"> Tài khoản</a>
                                    <a class="dropdown-item" href="{{url('logout')}}"><i
                                            class="fa fa-sign-out pull-right"></i>
                                        Đăng xuất</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            @yield('content')

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright &copy; by uyenb1605316
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="{{('/carsh-luanvan/public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{('/carsh-luanvan/public/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{('/carsh-luanvan/public/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{('/carsh-luanvan/public/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{('/carsh-luanvan/public/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{('/carsh-luanvan/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{('/carsh-luanvan/public/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{('/carsh-luanvan/public/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{('/carsh-luanvan/public/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{('/carsh-luanvan/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{('/carsh-luanvan/public/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{('/carsh-luanvan/public/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{('/carsh-luanvan/public/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{('/carsh-luanvan/public/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{('/carsh-luanvan/public/build/js/custom.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{('/carsh-luanvan/public/js/script.js')}}"></script>

    <script>
        function deleteAction() {
            var ask = window.confirm("Bạn có muốn xóa ?");
            if (ask) {
                return true;
            }
            else return false;
        }
    </script>


</body>

</html>
