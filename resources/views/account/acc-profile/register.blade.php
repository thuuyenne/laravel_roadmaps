<title>ĐĂNG KÝ</title>
@extends("account.layouts.elements.master")
@section('content')
<div class="container">
        <div class="customer-layout" id="layout-page">
            <h1 class="text-center">TẠO TÀI KHOẢN</h1>
            <div class="clearfix row">
                <div class="col-xs-12 col-sm-offset-12 col-sm-12" id="customer-register">
                    <div class="userbox">
                        <form action="{{route('register')}}" method="POST" id="create_customer" class="contactAjax">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        
                            <div class="border">
                                <div id="username" class="clearfix large_form">
                                    <label for="username">username</label>
                                    <input required="" type="text"  name="username" id="username" class="password text" size="100">
                                </div>
                                <div class="row">

                                    <div id="last_name" class="clearfix large_form col-sm-6">
                                        <label for="last_name">Họ</label>
                                        <input required="" type="text" name="last_name" id="last_name" class="text" size="30">
                                    </div>
                                    <div id="first_name" class="clearfix large_form col-sm-6">
                                        <label for="first_name">Tên</label>
                                        <input required="" type="text" name="first_name" id="first_name" class="text" size="30">
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="email" class="clearfix large_form col-sm-6">
                                        <label for="email">Email</label>
                                        <input required="" type="email" name="email" id="email" class="text" size="30">
                                    </div>
                                    <div id="phone_number" class="clearfix large_form col-sm-6">
                                        <label for="phone_number">Điện Thoại</label>
                                        <input required="" type="text"  name="phone_number" id="phone_number" class="text" size="30">
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="address" class="clearfix large_form col-sm-6">
                                        <label for="address">Địa chỉ</label>
                                        <input required="" type="text"  name="address" id="address" class="text" size="30">
                                    </div>
                                    <div id="phone_number" class="clearfix large_form col-sm-6">
                                        <label for="phone_number">Giới Tính</label>
                                        <label class="radio-inline">
                                        <input class="gt" type="radio" name="optradio">Nam
                                        </label>
                                        <label class="radio-inline">
                                            <input class="gt" type="radio" name="optradio">Nữ
                                          </label>
                                    </div>
                                </div>

                                <div id="password" class="clearfix large_form">
                                    <label for="password">Mật khẩu</label>
                                    <input required="" type="password" name="password" id="password" class="password text" size="30">
                                </div>

                                <div id="password" class="clearfix large_form">
                                    <label for="password">Nhập lại mật khẩu</label>
                                    <input required="" type="password"  name="passwordcheck" id="passwordcheck" class="password text" size="30">
                                </div>

                                <div class="action_bottom">
                                    <input class="btn" type="submit" value="Đăng kí">
                                </div>
                            </div>
                            <div class="req_pass">
                                <a class="come-back" href="/account/login-acc" data-name="dang-nhap" data-title="Đăng nhập">Trở về</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>  
    
@include('account.layouts.elements.footer')
@endsection
<script type="text/javascript">
    $("#create_customer").validate({
        rules:{
            username:{
                require:true,
                minlength:3
            },
            password:{
                require:true,
                menlength:6
            },
            passwordcheck:{
                equalTo: "#password"
            },
            email:{
                require:true,
                email:true,
            },
        },
        messages:{
            username:{
                require:"vui lòng nhập username",
                minlength:"vui lòng nhập 3 ký tự trở lên"
            },
            password:{
                require:"vui lòng nhập password",
                minlength:"vui lòng nhập 6 ký tự trở lên"
            },
            passwordcheck:{
                equalTo:"Mật khẩu xác nhận không đúng"
            },
            email:{
                require:"vui lòng nhập email",
                email:"không đúng định dạng email"
            }
        }
    })
</script>