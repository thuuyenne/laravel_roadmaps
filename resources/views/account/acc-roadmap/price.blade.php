<title>thông tin & giá - carsharing </title>
@extends("account.layouts.elements.master")
@section('content')
<style>
    .footer {
        padding: 129px 0 55px;
    }
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
                                <li id="personal"><strong>Phương tiện & thời gian </strong></li>
                                <li id="payment" class="active"><strong>Thông tin & giá</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="    width: 1119px;">
    <form action="{{url('/account/acc-roadmap/complete-roadmap')}}" method="POST" role="form">
        {{ csrf_field() }}
        <div class="mt-8">
            <div class="info">
                <div class="info-body">
                    <div class="row">

                        <div class="col-12 col-md-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-xxl mb-6 mb-md-0">
                                <span class="avatar-title rounded-circle">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                </span>
                            </div>


                        </div>
                        <div class="col-12 col-md">

                            <!-- Header -->
                            <div class="row mb-6">
                                <div class="col-12">

                                    <!-- Rating -->
                                    <div class="rating font-size-sm text-dark" data-value="5">
                                        THÔNG TIN GIÁ
                                    </div>

                                </div>
                                <div class="col-12">

                                    <!-- Time -->
                                    <span class="font-size-xs text-muted">
                                        tôi đồng ý tính chi phí chuyến đi theo <span style="color: #c36d6dc7;"> (*)</span> : <b>CHI PHÍ XĂNG XE</b>
                                    </span>

                                </div>
                            </div>

                            <!-- Title -->
                            <p class="mb-2 font-size-lg font-weight-bold">
                                DỰA KIẾN CHI PHÍ PHƯƠNG TIỆN
                            </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control text-center" id="priceWay" value="{{ 2500* (int) $distance }}" disabled="disable" />
                                    <input type="hidden" name="price" id="price">
                                </div>
                            </div>

                            <!-- Text -->
                            <p class="text-gray-500">
                                Chi phí này được tính bằng mức tiêu hao nhiên liệu trên đường (bằng quãng đường dự kiến {{ $distance }} ) . (km) (được tính tự động bởi Google map) nhân với chí phí trung bình của <b>xe ô tô</b> trên một đơn vị km là <b>2.500</b> vnđ/km
                                theo giá xăng hiện hành, thực tế có thể khác. Bạn có thể điều chỉnh cho phù hợp
                            </p>

                            <!-- Footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <div class="info">
                <div class="info-body">
                    <div class="row">
                        <div class="col-12 col-md-auto">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxl mb-6 mb-md-0">
                                <span class="avatar-title rounded-circle">
                                    <i class="fa fa-car" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <!-- Header -->
                            <div class="row mb-6">
                                <div class="col-12">
                                    <div class="rating font-size-sm text-dark" data-value="5">
                                        THÔNG TIN PHƯƠNG TIỆN
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- thông tin -->
                                    <span class="font-size-xs text-muted">
                                        thông tin chi tiết
                                    </span>
                                </div>
                            </div>
                            <!-- Title -->
                            <p class="mb-2 font-size-lg font-weight-bold">
                                TÊN PHƯƠNG TIỆN : BIỂN SỐ - SỐ GHẾ
                            </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control text-center " id="number-car" placeholder="nhập biển số xe " value="" style="    width: 427px; " />
                                    <input type="hidden" name="namevehi" id="hvehic">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control text-center" id="seats-number" value="1" disabled="disable" style="    width: 427px; margin-left: 255px;" />
                                    <input type="hidden" name="price" id="price">
                                </div>
                            </div>
                            <p class="mb-2 font-size-lg font-weight-bold">
                                ĐIỀU KHOẢN
                            </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control text-center " id="rules" placeholder="Nhập điều khoản " value="" />
                                    <input type="hidden" name="price" id="price">
                                </div>
                            </div>
                            <!-- Text -->
                            <p class="text-gray-500">
                                Điều vào ô ở trên. Ô này là ô điều khoản. ô điều khoản cho phép hành khách hoặc chủ xe có thể đưa ra điều khoản để tìm được người đồng hành đúng theo yêu cầu của mình .
                            </p>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <div class="info">
                <div class="info-body">
                    <div class="row">
                        <div class="col-12 col-md-auto">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxl mb-6 mb-md-0">
                                <span class="avatar-title rounded-circle">
                                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <!-- Header -->
                            <div class="row mb-6">
                                <div class="col-12">
                                    <div class="rating font-size-sm text-dark" data-value="5">
                                        HÌNH THỨC THANH TOÁN
                                    </div>
                                </div>

                            </div>
                            <!-- Title -->

                            <span class="font-size-xs text-muted">
                                chọn hình thức thanh toán <span style="color: #c36d6dc7;"> (*)</span>
                            </span>
                            <p class="mb-2 font-size-lg font-weight-bold">

                            </p>
                            <form>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input active" id="customRadio" name="example" value="customEx">
                                    <label class="custom-control-label" for="customRadio">trả trước </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                                    <label class="custom-control-label" for="customRadio2">trả sau</label>
                                </div>
                            </form>
                            <!-- Text -->
                            <!-- <p class="text-gray-500">
                                Điều vào ô ở trên. Ô này là ô điều khoản. ô điều khoản cho phép hành khách hoặc chủ xe có thể đưa ra điều khoản để tìm được người đồng hành đúng theo yêu cầu của mình .
                            </p> -->



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <fieldset class="section">

                <input class="submit button-next" type="submit" value="TIẾP THEO">
            </fieldset>

        </div>
    </form>
</div>
@endsection
@include('account.layouts.elements.footer')


@section('jsScript')
<script type="text/javascript">
    $(document).ready(function() {
        $('#nextFinish').click(function() {
            window.location.href = "/dixechung/hoan-thanh.html";
        });
    })

    $(document).ready(function() {

        var count = $('#countChair').val();

        var priceWay = $('#priceWay').val();
        $('#price').val(priceWay);
        $('#priceWay').val(formatNumber(priceWay, '.', '.'));

        //$('#priceChair').val(formatNumber(count*priceWay, '.', '.'));

        // $('#countChair').change(function(){
        // 	var count = $(this).val();
        // 	var priceWay = $('#priceWay').val().replace('.', '');

        // if(count == 1)
        //$('#priceChair').val(formatNumber(count*priceWay, '.', '.'));
        // else if(count == 2)
        // 	$('#priceChair').val(formatNumber(count*priceWay*0.9, '.', '.'));
        // else if(count == 3)
        // 	$('#priceChair').val(formatNumber(count*priceWay*0.85, '.', '.'));
        // else
        // 	$('#priceChair').val(formatNumber(count*priceWay*0.8, '.', '.'));
        // });
    });


    function formatNumber(nStr, decSeperate, groupSeperate) {
        nStr += '';
        x = nStr.split(decSeperate);
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
        }
        return x1 + x2;
    }
</script>
@endsection