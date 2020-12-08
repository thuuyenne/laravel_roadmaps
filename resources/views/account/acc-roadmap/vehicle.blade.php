<title>phương tiện & thời gian - carsharing </title>
@extends("account.layouts.elements.master")
@section('content')
<link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/vehicle.css')}}">

<script type="text/javascript" src={{('/carsh-luanvan/public/js/vehicle.js')}}></script>
<style>
        
</style>
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="content">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li id="account"><strong>Đi đến đâu?</strong></li>
                                <li id="personal" class="active"><strong>Phương tiện & thời gian </strong></li>
                                <li id="payment"><strong>Thông tin & giá</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <ul class="steps">
        <li class="is-active"></li>
        <li> </li>
        <li> </li>
    </ul>
    <form id="frmVehicle" action=""  role="form" class="form-wrapper">      
        <fieldset class="section is-active">
            <h3>BẠN LÀ AI ? </h3>
            <div class="row cf">
                <div class="four col">
                    <input name="usercate" type="radio" name="r1" id="r1" checked>
                    <label for="r1">
                        <h4>HÀNH KHÁCH</h4>
                    </label>
                </div>
                <div class="four col">
                    <input name="usercate" type="radio" name="r1" id="r2"><label for="r2">
                        <h4>CHỦ XE</h4>
                    </label>
                </div>
            </div>
            <div class="button">TIẾP</div>
        </fieldset>
        <fieldset class="section">
            <h3>BẠN DÙNG PHƯƠNG TIỆN GÌ ? </h3>
            <div class="row cf">
                <div class="four col">
                    <input type="radio" name="vehicle" id="r3" checked>
                    <label for="r3">
                        <h4>Ô TÔ</h4>
                    </label>
                </div>
                <div class="four col">
                    <input type="radio" name="vehicle" id="r4"><label for="r4">
                        <h4>XE MÁY</h4>
                    </label>
                </div>
            </div>
            <div class="button">TIẾP</div>
        </fieldset>
        <fieldset class="section">
            <h3>BAO GIỜ THÌ BẠN KHỞI HÀNH ?</h3>
            <div class="form-group row" style="margin-left: 26%;">

                <div class="col-8" id='pickDateTime'>
                    <input class="form-control" name="start_time" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                </div>
            </div>
            <input class="submit button" type="submit" value="THÔNG TIN & GIÁ">
        </fieldset>
       
    </form>
</div>
<footer style="    padding: 329px 0 55px;">
    <div class="container ">
        <div class="newsletter text-center ">
            <p class="title-top ">THEO DÕI BẢN TIN CỦA CHÚNG TÔI</p>
            <form class="contact-form contactAjax " action="contact ">
                <!-- <input type="hidden " name="titlePost " value="Đăng ký nhận thông tin ">
                <input type="hidden " name="lang " value="vn ">
                <input type="hidden " name="gmail " value="ntthuuyen.98@gmail.com "> -->
                <input name="email " type="email " id="contact_email " placeholder="Nhập địa chỉ email của bạn " required=" ">
                <button type="submit " class="button btn-register ">Subscribe</button>
            </form>
        </div>

        <div class="footer-menu text-center ">
            <ul>
                <li>
                    <a href="cong-ty " data-name="tuyen-dung " data-title="Tuyển dụng ">
                            Tuyển dụng                                </a>
                </li>
                <li>
                    <a href="Dang-cap-nhat-1589779119 " data-name="phuong-thuc-thanh-toan " data-title="Phương thức thanh toán ">
                            Phương thức thanh toán                                </a>
                </li>
                <li>
                    <a href="tro-giup " data-name="giao-hang-va-doi-tra " data-title="Giao hàng và đổi trả ">
                            Chuyến xe &amp; Hủy chuyến                               </a>
                </li>

                <li>
                    <a href="lien-he " data-name="lien-he " data-title="Liên hệ ">
                            HỆ THỐNG &amp; LIÊN HỆ                                </a>
                </li>
            </ul>
        </div>

        <div class="footer-bottom row ">
            <div class="col-xs-12 col-sm-3 ">
                <ul class="footer-icon ">
                    <h4>FOLLOW US</h4>

                    <li>
                        <a href="https://www.facebook.com/kidostudiowear " class="fa fa-facebook-square " target="_blank " rel="nofollow "></a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/kidosince2011 " class="fa fa-instagram " target="_blank " rel="nofollow "></a>
                    </li>

                    <li>
                        <a href=" " class="fa fa-youtube-play " target="_blank " rel="nofollow "></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <p class="copyright ">Copyright © 2020 CARSHARING. <a target="_blank " href="#/ ">By uyenb1605316</a></p>
            </div>
            <div class="col-xs-12 col-sm-3 ">
                <ul class="footer-icon text-right ">
                    <!-- <li><i class="fa fa-cc-mastercard "></i></li>
                    <li><i class="fa fa-cc-paypal "></i></li>
                    <li><i class="fa fa-cc-visa "></i></li> -->
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection


@section('jsScript')

<script type="text/javascript">
    $(document).ready(function() {

        //validate form
        $("#frmVehicle").validate({
            rules: {
                timeStart: "required"
            },
            messages: {
                timeStart: "Vui lòng nhập thời gian xuất phát"
            }
        });
    })

    $(function() {
        var maxDate = new Date($.now());
        $.fn.datetimepicker.defaults = {
            maskInput: true, // disables the text input mask
            pickDate: true, // disables the date picker
            pickTime: true, // disables de time picker
            pick12HourFormat: false, // enables the 12-hour format time picker
            pickSeconds: true, // disables seconds in the time picker
            startDate: maxDate // set a maximum date
        };
        $('#pickDateTime').datetimepicker({
            minDate: new Date(),
            format: 'yyyy-mm-dd hh:ii:ss',
            autoclose: true,
            language: 'vi'
        });
    });
</script>
@endsection