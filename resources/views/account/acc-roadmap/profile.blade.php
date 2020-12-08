<TITLE>thông tin chi tiết </TITLE>
@extends("account.layouts.elements.master")
@section('content')
<?php @session_start(); ?>
<div class="translate" style="min-height: 618px; height: auto;">
    <div class="section-content section-content-date">
        <h1 class="title-date">Thu, 22 October</h1>
    </div>
    <div class="section-content">
        <div class="content-root">
            <ul class="highlight-roadmap">
                <li class="location-withtime location" itemprop="location" itemscope itemtype="#" aria-label="Pick up location">
                    <meta itemprop="name" content="Địa chỉ chính xác, Điểm bắt đầu">
                    <meta itemprop="address" content="Địa chỉ chính xác, Điểm đến">
                    <a class="location-wrapper" href="">
                        <time datetime="2020-10-22T08:00:00+00:00">
                            <div class="datetime-info">06:10</div>
                        </time>
                        <div class="roadmap-container-loacation" aria-hidden="true">
                            <div class="location-bullet" aria-hidden="true"></div>
                            <div class="location-roadmap"></div>
                        </div>
                        <div class="location-lable">
                            <div class="location-lable">
                                <p class="text-titlestart location-lable-text" style="color: rgb(5, 71, 82);"><i class="fa fa-map-marker" aria-hidden="true"></i>TP HỒ CHÍ MINH</p>
                            </div>
                            <P class="text text-caption" style="color: rgb(5, 71, 82);">49 - Trần Hoàng Na, Ninh Kieu, Can Tho</P>
                        </div>
                    </a>
                <li class="location-withtime location" itemprop="location" itemscope itemtype="#" aria-label="Pick up location">
                    <meta itemprop="name" content="Địa chỉ chính xác, Điểm bắt đầu">
                    <meta itemprop="address" content="Địa chỉ chính xác, Điểm đến">
                    <a class="location-wrapper wrapper-end" href="">
                        <div class="roadmap-container-loacation roadmap-locationend" aria-hidden="true">
                            <div class="locationend-bullet" aria-hidden="true"></div>
                            <div class="location-locationend"></div>
                        </div>
                        <div class="location-lable">
                            <div class="location-lable">
                                <p class="text-titlestart location-lable-text text-locationend" style="color: rgb(5, 71, 82);"><i class="fa fa-map-marker" aria-hidden="true"></i>CẦN THƠ</p>
                            </div>

                            <P class="text text-caption locationend" style="color: rgb(5, 71, 82);">49 - Trần Hoàng Na, Ninh Kieu, Can Tho</P>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="location-lable" style="    padding-left: 26px;">
                        <div class="flex flex-col">
                            <div class="flex-items-center">
                                <i style="color: rgb(5, 71, 82);" class="fa fa-car" aria-hidden="true"></i>
                                <span style="  padding-left: 0.8em;  font-weight: 700; color: rgb(5, 71, 82);"> BIỂN SỐ XE - TÊN XE: </span>
                                <span style="  padding-left: 0.8em;  font-weight: 700; color: rgb(182, 112, 21);"> A51 - 78.324 - Toyota Innova 2.0E </span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex-items-center">
                                <i style="color: rgb(5, 71, 82);     margin-left: 4px;" class="fa fa-user" aria-hidden="true"></i>
                                <span style="  padding-left: 1.8em;  font-weight: 700; color: rgb(5, 71, 82);">TỔNG SỐ GHẾ : </span>
                                <span style="  padding-left: 0.8em;  font-weight: 700; color: rgb(182, 112, 21);"> 7 </span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex-items-center">
                                <i style="color: rgb(5, 71, 82);     margin-left: 4px;" class="fa fa-user" aria-hidden="true"></i>
                                <span style="  padding-left: 1.8em; font-weight: 700;   color: rgb(5, 71, 82);">SỐ GHẾ CÒN LẠI : </span>
                                <span style="  padding-left: 0.8em;  font-weight: 700; color: rgb(182, 112, 21);"> 5</span>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="section-content section-content-price">
        <div class="content-price-main">
            <div class="item-price">
                <span class="content-left-text">
                    <span class="item-body-main">Tổng số tiền cho 1 người</span>
                </span>
                <span class="content-right-text">
                    <div class="text item-title">140.000 vnd</div>
                </span>
            </div>
            <div class="hr key">
                <hr>
            </div>
            <a class="item-info-customer">
                <span class="item-left-cus">
                    <span class="text-name-cus">UYN</span>
                </span>
                <span class="item-right-cus">
                    <div class="img-avatar-cus">
                        <img src="" alt="">
                    </div>
                </span>
            </a>
        </div>
    </div>

    <div class="section-content section-content-contact">
        <div class="content-contact-main">
            <div class="hr key">
                <hr>
            </div>
            <a class="item-contact-highlight" href="">
                <span class="item-contact-left"><i class="fa fa-comments-o" aria-hidden="true"></i></span>
                <span class="content-left-text">
                    <span class="item-body-main contact-text">Liên hệ với UYN</span>
                </span>
                <span class="content-right-text content-contact-title">
                    <div class="text item-title"><i class="fa fa-car" aria-hidden="true"></i>chọn</div>
                </span>
            </a>
        </div>
        <div class="content-contact-main">
                <span style="  padding-left: 13.8em;  font-weight: 700; color: rgb(112, 140, 145);"> (*) chỉ được đăng ký 1 lần 1 người</span>
            </div>
    </div>
    <div class="hr key">
        <hr>
    </div>
</div>
@include('account.layouts.review')
@include('account.layouts.elements.footer')
@endsection