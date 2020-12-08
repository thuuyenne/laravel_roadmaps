<title>đăng nhập CARSHARING</title>   
@extends("account.layouts.elements.master")
@section('content')

<div class="container">
        <div class="customer-layout" id="layout-page">
            <h1>Đăng ký hoặc đăng nhập</h1>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-6" id="customer-login">
                    @if ($errors->any() )
                    <div class="alert alert-danger alert-block">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('fail'))
                    <div class="alert alert-sucess alert-block">
                            <ul>
                               {{ session('fail')}}
                            </ul>
                        </div>
                    @endif
                    <div class="userbox" id="login">
                    <form action="{{route('login')}}"  method="POST" id="customer_login" class="contactAjax">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="border">
                                <h3>Bạn đã là khách hàng</h3>

                                <div class="clearfix large_form">
                                    <label for="customer_email">Email</label>
                                    <input required="" type="email" value="" name="email" id="customer_email" class="text">
                                </div>

                                <div class="clearfix large_form">
                                    <label for="customer_password">Mật khẩu</label>
                                    <input required="" type="password" value="" name="password" id="customer_password" class="text" size="16">
                                </div>

                                <div class="action_bottom">
                                    <input class="btn btn-signin" type="submit" value="Đăng nhập">
                                </div>
                                <div class="req_pass">
                                    <a href="#" onclick="showRecoverPasswordForm();return false;">Quên mật khẩu?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="recover-password" style="display: none;" class="userbox">
                        <div class="accounttype">
                            <h2>Phục hồi mật khẩu</h2>
                        </div>

                        <form action="forgetPassword" class="contactAjax">

                            <label for="email">Email</label>
                            <input style="margin-left: 20px; margin-bottom: 20px;" type="email" value="" size="30" name="email" placeholder="Email" id="recover-email" class="text">

                            <div class="action_bottom">
                                <input class="btn" type="submit" value="Gửi">
                            </div>
                            <div class="req_pass">
                                <a href="#" onclick="hideRecoverPasswordForm();return false;">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="border">
                        <h3>Bạn là khách hàng mới</h3>
                        <p>
                            tạo tài khoản để có thể đặt xe hoặc đăng ký thông tin để có thể đi xe chung. Tiếc kiệm được chi phí đi lại giảm thiểu được chất độc ra ngoài môi trường bên cạnh đó còn mang lại sự an toàn cho chính chúng ta.</p>
                        <div class="action_bottom" style="border: none !important;">
                            <a href="../account/acc-profile/register" data-name="dang-ky" data-title="Đăng ký" class="register">Đăng kí ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
        @include('account.layouts.elements.footer')
        @endsection
<script type="text/javascript">
        function showRecoverPasswordForm() {
            document.getElementById("recover-password").style.display = "block";
            document.getElementById("login").style.display = "none";
        }

        function hideRecoverPasswordForm() {
            document.getElementById("recover-password").style.display = "none";
            document.getElementById("login").style.display = "block";
        }

        if (window.location.hash == "#recover") {
            showRecoverPasswordForm();
        }
    </script>