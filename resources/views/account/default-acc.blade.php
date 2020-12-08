<title> CARSHARING</title>
@extends("account.layouts.elements.master")
@section("content")
    <div class="home-cover">
   
        <div class=" home-form" style="margin-top: 100px;">
            <form action="" method="post">
                <div class="row" style="    margin-left: 260px;
    margin-right: 260px;">
                    <div class="col-sm-3" style="position: relative;">
                        <!-- <button class="btn btn-block">
                        <i class="fa fa-circle-o"></i>
                        Leaving from...
                    </button> -->
                        <div class="input-group ">
                            <div class="input-group-prepend">

                                <span class="input-group-text">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Địa điểm đi...">
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <!-- <button class="btn btn-block border-left" >
                        <i class="fa fa-circle-o"></i>
                        Going to...
                    </button> -->
                        <div class="input-group border-left">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Địa điểm đến...">
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <!-- <button class="btn  btn-block border-left">
                        <i class="fa fa-calendar"></i>
                        Today
                    </button> -->

                        <div class="input-group border-left">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                            <input type="date" class="form-control" placeholder="Thời gian..." id="date">
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <!-- <button class="btn btn-block border-left">
                        <i class="fa fa-user"></i>
                        1 Passenger
                    </button> -->

                        <div class="input-group border-left">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nam/nữ">
                        </div>

                    </div>
                    <div class="col-sm-1" id="search">
                        <button style="margin-left: -41px; padding: 12px 12px;" class="btn btn-block text-center">
                            <i class="fa fa-search"></i>
                        </button>

                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="banner-item"  display: inline-block;">
                    <div class="hidden-xs">
                        <a href="#" tabindex="0">
                            <img style="width:100%; margin-top: -131px;" src="{{('/carsh-luanvan/public/css-account/images/banner1.png')}}" alt="web nhẹ_-07-08-2020-14-37-19.jpg" title="web nhẹ_-07-08-2020-14-37-19.jpg">
                        </a>
                        <div class="single-header-overlay is-light-text">
						<div class="rbc-container rb-p20-gutter">
								
						
				<!-- <h1 itemprop="headline" class="single-title entry-title cc_cursor">Smart transportation market to register a double-digit CAGR of 20% over 2018-2024</h1>
				 -->
                    </div>
                </div>
    

    @section('jsScript')
    <script src="{{ asset('/carsh-luanvan/public/js/script.js') }}"></script>
