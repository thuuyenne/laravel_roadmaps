<TITLE>TÌM KIẾM CHUYẾN</TITLE>
@extends("account.layouts.elements.master")
@section('content')
<link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/search.css')}}">
<div class="section-content sear-full">
        <div class="search">
            <div class="in-search">
                <i class="fa fa-search"></i>
                <div class="search-lable">
                    <p class="text text-body" style="color: rgb(5, 71, 82);">
                        <span class="search-addr">
                            <span class="address-start">
                                TP HỒ CHÍ MINH
                            </span>
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="address-end">
                                CẦN THƠ
                            </span>
                        </span>
                    </p>
                    <span class="text text-body search-info search-date"> today 1 passenger</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="nav nav-pills nav-justified">
            <ul class="nav nav-tabs">
                <li><a data-toggle="tab" class="nav-item nav-link active" href="#all"><label>TẤT CẢ</label</li></a>
                    <li><a data-toggle="tab" class="nav-item nav-link" href="#chuxe"><label>CHỦ XE</label></li></a>
                        <li><a data-toggle="tab" class="nav-item nav-link" href="#hanhkhach"><label>HÀNH KHÁCH</label></li></a>
            </ul>
        </nav>
        <div class=" section-content tab-content">
            <div id="all" class="tab-pane container-infor fade in active">
                <li class="trips-list-date" style="top: 241px;">
                    <h2 class="titile-date trips-list">Thu, 22 Oct</h2>
                </li>
                <li class="trips-card card-infor">
                    <a href="">
                        <meta itemprop="">
                        <meta itemprop="">
                        <meta itemprop="">
                        <meta itemprop="">
                        <div class="container-main">
                            <div class="infor-main">
                                <div class="content-infor-main">
                                    <ul class="high-light-road">
                                        <li class="start-location" itemprop="location" style="list-style-type: none;">
                                            <meta itemprop="" content="Enfield">
                                            <meta itemprop="" content="Enfield">
                                            <div class="wapper-location ">
                                                <time datetime="">
                                                            <div class="datetime-info">06:10</div>
                                                        </time>
                                                <div class="roadmap-container-loacation" aria-hidden="true">
                                                    <div class="location-bullet" aria-hidden="true"></div>
                                                    <div class="location-roadmap"></div>
                                                </div>
                                                <div class="location-lable">
                                                    <p class="text-titlestart location-lable-text" style="color: rgb(5, 71, 82);"><i class="fa fa-map-marker" aria-hidden="true"></i>TP HỒ CHÍ MINH</p>
                                                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                                    <p class="text-titlestart location-lable-text" style="color: rgb(5, 71, 82);"><i class="fa fa-map-marker" aria-hidden="true"></i>CẦN THƠ
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <span class="trips-price-roadmap tille-text">140.000 vnd</span>
                            </div>
                            <div class="tripcard-cus-bottom">
                                <div class="tripcard-bottom-left">
                                    <div class="trip-left-drive">
                                        <div class="cus-avatar-img">
                                            <img src="" alt="">
                                        </div>
                                        <div class="cus-info-tripcard">
                                            <p class=" text-title trip-card-name-drive" style="color: rgb(5, 71, 82);">uyn</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tripcard-bottom-right">
                                    <div class="tripcard-btn-choose">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </div>

        </div>
    </div>
@include('account.layouts.review')
@include('account.layouts.elements.footer')
@endsection