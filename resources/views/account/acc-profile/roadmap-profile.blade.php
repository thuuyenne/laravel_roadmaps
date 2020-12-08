<TITLE>thông tin chuyến</TITLE>
@extends("account.layouts.elements.master")
@section('content')
<?php @session_start(); ?>
<style>
    form.contactAjax {
    margin-left: 20px;
}
i.fa.fa-eye {
    position: absolute;
    right: 1px;
}
</style>
<div class="container-fluid">
    <div class="content-main">
        <main class="homepage">
            <div class="header-main" style="padding-top: 100px;">
                <div class="container-fuild" style="min-height: 450px; margin-left: px;">
                    <div class="row">
                        <div style="  margin-left: 14%; margin-top: -2%;"class="col-xs-12 col-sm-8 col-md-9">
                            <h3 style=" text-align: center;" class="title-account">Thông tin chuyến xe</h3>
                            <section class="account-content">
                                <p style="text-align: center;">kiêm tra trạng thái và thông tin liên quan đến chuyến đi, mọi thắc mắc có thể liên hệ với chúng tôi trên các trang mạng xã hội.</p>
                            </section>
                            <div class="">
                                <div class="col-md-12">
                                    <div class="table">
                                        <table class="col-md-12 text-center">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Mã chuyến</th>
                                                    <th style="text-align: center;">Điểm đi</th>
                                                    <th style="text-align: center;">Điểm đến</th>
                                                    <th style="text-align: center;">Thời gian</th>
                                                    <th style="text-align: center;">Khoảng cách (km)
                                                    </th>
                                                    <th style="text-align: center;">Tình trạng</th>
                                                    <th style="text-align: center;">Phương tiện</th>
                                                    <th style="text-align: center;">Tổng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form action="" method="POST">
                                                </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@include('account.layouts.elements.footer')
@endsection