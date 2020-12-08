<TITLE>thông tin cá nhân</TITLE>
@extends("account.layouts.elements.master")
@section('content')
<style>
    form.contactAjax {
    margin-left: 20px;
}
i.fa.fa-eye {
    position: absolute;
    right: 1px;
}
button.btn.btn-success {
    min-width: 125px;
    text-transform: uppercase;
    background-color: #000;
    color: #fff;
    border-radius: 0;
    font-size: 12px;
    float: right;
    padding: 9px 3px;
    margin-right: -78px;
    margin-top: 19px;
}
</style>
<div class="container-fluid"> 
        <div class="content-main">
            <main class="homepage">
                <div class="header-main" style="padding-top: 100px;">
                    <div class="container-fuild" style="min-height: 450px; margin-left: 18%;">
                        <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                @if (session('status-success'))
                                <div class="alert alert-success">
                                    {{ session('status-success') }}
                                </div>
                                @endif
                                @if (session('status-error'))
                                <div class="alert alert-error">
                                    {{ session('status-error') }}
                                </div>
                                @endif
                            </div>
                    </div>
                    <div style="  margin-left: 14%; margin-top: -27%;"class="col-xs-12 col-sm-8 col-md-9">
                    <h3 style=" text-align: center;" class="title-account">Thông tin cá nhân</h3> 
                    <section class="customers-content">
                            <p>
                                Quý khách có thể truy cập và sửa đổi thông tin chi tiết cá nhân (tên, địa chỉ thanh toán, số điện thoại v.v.) để tạo điều kiện cho quá trình đăng ký chuyến xe của quý khách trong tương lai và thông báo cho chúng tôi về bất kỳ thay đổi nào trong thông
                                tin liên hệ. </p>
                                </section>
                          
                        <form action="{{ route('taikhoan.update',['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data"> 
                        {{ csrf_field() }}
                        @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $err)
                                            {{$err}}<br>
                                        @endforeach
                                    </div>
                                @endif
                        @if(session('oldpw'))
                        <div class="alert alert-danger">  {{session('oldpw')}}</div>
                        @endif
                        @if(session('capnhat'))
                        <div class="alert alert-success">  {{session('capnhat')}}</div>
                        @endif
                            
                           <div class="row">
                               <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input class="form-control" type="text" readonly value="{{ Auth::user()->email }}">
                               </div>
                               <div class="col-md-6">
                                    <label for="">Username</label>
                                    <input class="form-control" type="text" readonly value="{{ Auth::user()->username }}">
                                </div>
                           </div>

                           <div class="row">
                                <div class="col-md-6">
                                    <label for="">Họ</label>
                                    <input class="form-control" type="text" name="ho"
                                    @if(Auth::user()->first_name)
                                    value="{{ Auth::user()->first_name }}"
                                    @endif>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tên</label>
                                    <input class="form-control" type="text" name="ten"
                                    @if(Auth::user()->last_name)
                                    value="{{ Auth::user()->last_name }}"
                                    @endif>
                                </div>
                            
                            </div>


                            <div class="row">
                                
                                <div class="col-md-6">
                                    <label for="">Số điện thoại</label>
                                    <input class="form-control" type="text"  name="sdt"
                                    @if(Auth::user()->phone_number)
                                    value="{{ Auth::user()->phone_number }}"
                                    @endif>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Địa chỉ</label>
                                    <input class="form-control" type="text"  name="diachi"
                                    @if(Auth::user()->address)
                                    value="{{ Auth::user()->address }}"
                                    @endif>
                                </div>
                            </div>

                            


                            <div class="row">
                                <input style="  margin-top:26px;  margin-left: 17px;" type="checkbox" id="changepassword" name="changepassword" > 
                                &nbsp
                                <p style=" margin-top: 22px; padding-left: 9px;font-weight: 600;" >THAY ĐỔI MẬT KHẨU</p>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Mật khẩu cũ</label>
                                    <input class="form-control password" type="text" name="oldpassword" disabled="">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Mật khẩu mới</label>
                                    <input class="form-control password" type="text" name="password" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nhập lại mật khẩu</label>
                                    <input class="form-control password" type="text" name="passwordAgain" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Lưu lại</button>
                                </div>
                               
                            </div>

                    
                        </form>
                    
                      
                    </div>
                </div>
        </main>
    </div>
</div>

    
    

@include('account.layouts.elements.footer')
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#changepassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").attr('disabled','');
            }
        });
    });
</script>
   
