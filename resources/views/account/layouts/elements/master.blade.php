<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/newdefault.css')}}">
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/res.css')}}">
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/bebasNeu.ttf')}}">
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/navbar.css')}}">
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/footer.css')}}">
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/where.css')}}">   
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/prof.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- <div class="top-bar">
        <div class="container-custom-in-line">
            <a href="">carsharing online - more fun</a>
        </div>
    </div> -->
    <div class="container-fluid">
        <header id="header" class="scroll-fixed">
            <div class="header-top">
                <div class="container">
                    <div class="menu clearfix relative">
                        <!-- <div class="menu-hambuger-carsharing">
                        <img src="" alt="">
                    </div>
                    <div class="logo-menu">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div> -->
                        <h1 class="logo text-center">
                            <a href="">
                                <img src="" alt="">
                            </a>
                        </h1>
                        <nav id="cssmenu" class="pc hidden-xs hidden-sm">
                            <ul class="nav" data-e="li" data-active="active">
                            <li class>
                                    <a href="{{url('account')}}" data-name="home" data-title="home">Home</a>
                                </li>
                                <li class="has-sub">
                                    <span class="submenu-button"></span>
                                    <a href="#" data-name="tim-chuyen" data-title="tìm chuyến">Tìm chuyến</a>
                                    <ul style>
                                        <li>
                                            <a href="" data-name="hanh khach" data-title="hành khách">KHÁCH HÀNG</a>
                                        </li>
                                        <li>
                                            <a href="" data-name="chủ xe" data-title="chủ xe">CHỦ XE</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class>
                                    <a href="{{url('account/acc-roadmap')}}" data-name="dang-ky-chuyen" data-title="đăng ký chuyến">Đăng ký chuyến</a>
                                </li>
                                @if(Auth::check())
                                <li class="has-sub">
                                    <span class="submenu-button"></span>
                                    <a href="#" data-name="tim-chuyen" data-title="tìm chuyến">{{ Auth::User()->username}}</a>
                                    <ul style>
                                        <li>
                                            <a href="{{url('account/acc-profile/roadmap-profile')}}" data-name="hanh khach" data-title="hành khách">CHUYẾN XE</a>
                                        </li>
                                        <li>
                                            <a href="{{  route('update_profile') }}" data-name="dang-nhap" data-title="đăng nhập ">CÁ NHÂN</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class>
                                    <a href="{{ route('logout') }}" data-name="dang-nhap" data-title="đăng nhập ">ĐĂNG XUẤT</a>
                                </li>
                                @else 
                                <li class>
                                    <a href="{{  route('get.register') }}" data-name="dang-ky" data-title="đăng ký ">Đăng ký </a>
                                </li>
                                <li class>
                                    <a href="{{ route('get.login') }}" data-name="dang-nhap" data-title="đăng nhập ">Đăng nhập </a>
                                </li>
                                @endif
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script type="text/javascript" id="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
            }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "357839202076301");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=357839202076301&amp;ev=PageView&amp;noscript=1"></noscript>
    <script type="text/javascript" id="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
            }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "1839245489505495");
        fbq("set", "agent", "tmgoogletagmanager", "1839245489505495");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1839245489505495&amp;ev=PageView&amp;noscript=1"></noscript>
    <script type="text/javascript" src="views/template/js/js_menu.js"></script>
    <script src="views/template/assets/1000290753/1000557221/14/jquery.mthumbnailscroller83f3.js?v=462" type="text/javascript"></script>
    <script src="views/template/assets/1000290753/1000557221/14/owl-carousel.min83f3.js?v=462" type="text/javascript"></script>
    <script src="views/template/assets/1000290753/1000557221/14/script83f3.js?v=462" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="admin/new-template/tinymce/tinymce/content.css">
    <script type="text/javascript">
        $(function() {
            $('.priceDot').each(function(index, value) {
                $(value).text($(value).text().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            })
            $('.icon-header .cart').click(function() {

                $('#cart-ajax').addClass('active');

            });
        })
        jQuery.fn.delModcart = function(mod_product_id, mod_color_id, mod_size_id) {
            if (mod_product_id > 0) {
                jQuery("input[name=mod_product_id]:hidden").val(mod_product_id);
                jQuery("input[name=mod_color_id]:hidden").val(mod_color_id);
                jQuery("input[name=mod_size_id]:hidden").val(mod_size_id);
                jQuery("#formModcart").submit();
            }
        };
        // add and delete product from cart
        jQuery.fn.updateCart = function(product_id, color_id, size_id, qty) {
            if ((product_id > 0) && (qty > 0)) {
                jQuery("input[name=product_id]:hidden").val(product_id);
                jQuery("input[name=color_id]:hidden").val(color_id);
                jQuery("input[name=size_id]:hidden").val(size_id);
                jQuery("input[name=qty]:hidden").val(qty);
                jQuery("input[name=task]:hidden").val('cart.update');
                jQuery("#formCart").submit();
            }
        };
        jQuery.fn.delCart = function(product_id, color_id, size_id) {
            if (product_id > 0) {
                jQuery("input[name=product_id]:hidden").val(product_id);
                jQuery("input[name=color_id]:hidden").val(color_id);
                jQuery("input[name=size_id]:hidden").val(size_id);
                jQuery("input[name=task]:hidden").val('cart.delete');
                jQuery("#formCart").submit();
            }
        };
        
        function changeTotal2() {
            var listCart = [];
            $.each(jQuery('.dataCart'), function(index, value) {
                var count = jQuery(this).find('.count').val().replace(/[^\d.]/g, '');
                var id = jQuery(this).find('.id').val().replace(/[^\d.]/g, '');
                for (var i = 0; i < count; i++) {
                    listCart.push(id);
                }
                if (listCart != '') {
                    result = "[" + listCart + "]";
                } else {
                    result = listCart;

                }
                createCookie('orderProduct', result);
            });
            window.location.reload();
        }
    </script>
    <script type="text/javascript">
        function reload() {
            // location.reload();
            setTimeout(function() {
                location.reload();
            }, 800);
        }

        function changeValue(value, id) {
            $.post('modules/api.php?do=changeValue', {
                count: value,
                itemId: id
            }, function(data, textStatus, xhr) {
                data = $.parseJSON(data);
                $("#total").html(data.prices);
            });
        }

        function clearCartItem(id) {
            $.post('modules/api.php?do=clearCartItem', {
                itemId: id
            }, function(data, textStatus, xhr) {
                data = $.parseJSON(data);
                $("#total").html(data.prices);
                $("[data-id=" + id + "]").remove();
                if ($(".dataCart").length == 0) {
                    window.location.reload();
                }
            });
        }
    </script>
    <script type="text/javascript">
        //add colum
        $('.two').click(function() {
            $(this).addClass('selected');
            $('.grid').removeClass('list');
            $('.four').removeClass('selected');
        });
        $('.four').click(function() {
            $(this).addClass('selected');
            $('.grid').addClass('list');
            $('.two').removeClass('selected');
        });
        $('.add_filter').click(function() {
            $('.filters-panel').addClass('active');
        });
        $('.close_fiter').click(function() {
            $('.filters-panel').removeClass('active');
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('.slider_related').owlCarousel({
                loop: true,
                autoplay: false,
                margin: 10,
                autoplaySpeed: 300,
                responsiveClass: true,
                dots: false,
                nav: true,
                navText: [$('.prev-related'), $('.next-related')],
                responsive: {
                    0: {
                        items: 2
                    },
                    480: {
                        items: 2
                    },
                    992: {
                        items: 4
                    },
                    1024: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script>
        //menu show
        $('.sub-menu ul').hide();
        $(".sub-menu a").click(function() {
            $(this).parent(".sub-menu").children("ul").slideToggle("100");
            $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
        });
        // click
        jQuery(function() {
            jQuery(".click-to-reveal").click(function() {
                jQuery(this)
                    .next("div.content_tt")
                    .slideToggle();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".quick-click").click(function() {
                var id = $(this).data('id')

                $.ajax({
                        type: 'GET',
                        url: $('base').data('url') + 'modules/api.php?do=quickView&id_sp=' + id
                    })
                    .done(function(res) {
                        $('#quick-view-modal').css('display', 'block');
                        $("#quick-view-modal").html(res.body);
                        $("#quick-view-modal").modal()
                    })
                    .error(function(res) {
                        alert(res.text);
                    })
            });
            $('.quickview-close').click(function() {
                $('#quick-view-modal').css('display', 'none');
            });
            $('body').on('change', 'select[name=province]', function(e) {
                var pro = $('.field-input option:selected').val();
                var active = $('.field-input option:selected').data('active');
                // alert(active);
                $.ajax({
                    type: 'GET',
                    url: $('base').data('url') + 'modules/api.php?do=getListDistrict&province=' + $(this).val()
                }).success(function(res) {
                    $('select[name=district]').html(res);
                    if (active == 0) {
                        $('#payment_method_id_0').html('');
                        $('input#f1_false').prop("checked", false);
                        $("input#f1_true").prop("checked", true);
                    } else {
                        $('#payment_method_id_0').html('<label class="radio-label"><div class="radio-input"><input type="radio" id="f1_false" name="f1" class="input-radio" value="0" checked=""></div><span class="radio-label-primary">Giao tận nơi</span></label>');
                    }
                    if ($('base').attr('href') == $('base').data('url') && $('.formSearch.searchAjax').length) {
                        $('.formSearch.searchAjax').submit();
                    }
                })
            });
            $('select[name=district]').change(function() {
                var active = $(this).find(':selected').data('active');

                // alert(active);
                if (active == 1) {
                    $('#payment_method_id_0').html('<label class="radio-label"><div class="radio-input"><input type="radio" id="f1_false" name="f1" class="input-radio" value="0" checked=""></div><span class="radio-label-primary">Giao tận nơi</span></label>');
                    $('input#f1_false').prop("checked", true);
                    $("input#f1_true").prop("checked", false);
                    var pro = $(this).find(':selected').data('ship');
                    var price = $(this).data('price');
                    var total = pro + price;
                    var savedata = $.ajax({
                        type: 'GET',
                        // data: data,
                        // url: 'modules/action.php?do=order',
                        success: function() {
                            $('#ship').html(pro);
                            $('#total').html(total);
                            $('#ins_total').html('<input type="hidden" name="price" value="' + price + '" />');
                            $('#ins_ship').html('<input type="hidden" name="ship" value="' + pro + '" />');
                        }
                    });
                } else {
                    $('#payment_method_id_0').html('');
                    $('input#f1_false').prop("checked", false);
                    $("input#f1_true").prop("checked", true);
                    var pro = $(this).find(':selected').data('ship');
                    var price = $(this).data('price');
                    var total = pro + price;
                    var savedata = $.ajax({
                        type: 'GET',
                        // data: data,
                        // url: 'modules/action.php?do=order',
                        success: function() {
                            $('#ship').html(pro);
                            $('#total').html(total);
                            $('#ins_total').html('<input type="hidden" name="price" value="' + price + '" />');
                            $('#ins_ship').html('');
                        }
                    });
                }
            });
            $('body').on('change', '#section-payment-method input:radio', function() {
                $('#section-payment-method .content-box-row.content-box-row-secondary').addClass('hidden');

                var id = $(this).attr('id');

                if (id) {
                    var sub = $('body').find('.content-box-row.content-box-row-secondary[for=' + id + ']')

                    if (sub && sub.length > 0) {
                        $(sub).removeClass('hidden');
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('.priceDot').each(function(index, value) {
                $(value).text($(value).text().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
            })
            $('.icon-header .cart').click(function() {

                $('#cart-ajax').addClass('active');

            });
        })
        jQuery.fn.delModcart = function(mod_product_id, mod_color_id, mod_size_id) {
            if (mod_product_id > 0) {
                jQuery("input[name=mod_product_id]:hidden").val(mod_product_id);
                jQuery("input[name=mod_color_id]:hidden").val(mod_color_id);
                jQuery("input[name=mod_size_id]:hidden").val(mod_size_id);
                jQuery("#formModcart").submit();
            }
        };
        // add and delete product from cart
        jQuery.fn.updateCart = function(product_id, color_id, size_id, qty) {
            if ((product_id > 0) && (qty > 0)) {
                jQuery("input[name=product_id]:hidden").val(product_id);
                jQuery("input[name=color_id]:hidden").val(color_id);
                jQuery("input[name=size_id]:hidden").val(size_id);
                jQuery("input[name=qty]:hidden").val(qty);
                jQuery("input[name=task]:hidden").val('cart.update');
                jQuery("#formCart").submit();
            }
        };
        jQuery.fn.delCart = function(product_id, color_id, size_id) {
            if (product_id > 0) {
                jQuery("input[name=product_id]:hidden").val(product_id);
                jQuery("input[name=color_id]:hidden").val(color_id);
                jQuery("input[name=size_id]:hidden").val(size_id);
                jQuery("input[name=task]:hidden").val('cart.delete');
                jQuery("#formCart").submit();
            }
        };
        //    function clearCart2(id){
        //     if($.isNumeric(id)){
        //         var cartCookie = decodeURIComponent(readCookie('orderProduct'));
        //         // alert(cartCookie);
        //         var listCart = JSON.parse(cartCookie);
        //         for(var i = listCart.length; i--;){
        //             if(listCart[i] == id){
        //                 listCart.splice(i,1);
        //             }
        //         }        
        //         $('#data'+id).remove();
        //         window.location.reload();
        //         if(listCart.length == 0){
        //             window.location.reload();
        //         }
        //         if(listCart != ''){
        //             result = "[" + listCart + "]";
        //         } else {
        //             result = listCart;
        //         }
        //         createCookie('orderProduct', result);
        //         createCookie('voucher','');
        //     }else{
        //        createCookie('orderProduct','');
        //        createCookie('voucher','');
        //        window.location.reload();
        //     }
        // }
        function changeTotal2() {
            var listCart = [];
            $.each(jQuery('.dataCart'), function(index, value) {
                var count = jQuery(this).find('.count').val().replace(/[^\d.]/g, '');
                var id = jQuery(this).find('.id').val().replace(/[^\d.]/g, '');
                for (var i = 0; i < count; i++) {
                    listCart.push(id);
                }
                if (listCart != '') {
                    result = "[" + listCart + "]";
                } else {
                    result = listCart;

                }
                createCookie('orderProduct', result);
            });
            window.location.reload();
        }
    </script>
    <script type="text/javascript">
        function reload() {
            // location.reload();
            setTimeout(function() {
                location.reload();
            }, 800);
        }

        function changeValue(value, id) {
            $.post('modules/api.php?do=changeValue', {
                count: value,
                itemId: id
            }, function(data, textStatus, xhr) {
                data = $.parseJSON(data);
                $("#total").html(data.prices);
            });
        }

        function clearCartItem(id) {
            $.post('modules/api.php?do=clearCartItem', {
                itemId: id
            }, function(data, textStatus, xhr) {
                data = $.parseJSON(data);
                $("#total").html(data.prices);
                $("[data-id=" + id + "]").remove();
                if ($(".dataCart").length == 0) {
                    window.location.reload();
                }
            });
        }
    </script>
    <script type="text/javascript">
        //add colum
        $('.two').click(function() {
            $(this).addClass('selected');
            $('.grid').removeClass('list');
            $('.four').removeClass('selected');
        });
        $('.four').click(function() {
            $(this).addClass('selected');
            $('.grid').addClass('list');
            $('.two').removeClass('selected');
        });
        $('.add_filter').click(function() {
            $('.filters-panel').addClass('active');
        });
        $('.close_fiter').click(function() {
            $('.filters-panel').removeClass('active');
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('.slider_related').owlCarousel({
                loop: true,
                autoplay: false,
                margin: 10,
                autoplaySpeed: 300,
                responsiveClass: true,
                dots: false,
                nav: true,
                navText: [$('.prev-related'), $('.next-related')],
                responsive: {
                    0: {
                        items: 2
                    },
                    480: {
                        items: 2
                    },
                    992: {
                        items: 4
                    },
                    1024: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script>
        //menu show
        $('.sub-menu ul').hide();
        $(".sub-menu a").click(function() {
            $(this).parent(".sub-menu").children("ul").slideToggle("100");
            $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
        });
        // click
        jQuery(function() {
            jQuery(".click-to-reveal").click(function() {
                jQuery(this)
                    .next("div.content_tt")
                    .slideToggle();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".quick-click").click(function() {
                var id = $(this).data('id')

                $.ajax({
                        type: 'GET',
                        url: $('base').data('url') + 'modules/api.php?do=quickView&id_sp=' + id
                    })
                    .done(function(res) {
                        $('#quick-view-modal').css('display', 'block');
                        $("#quick-view-modal").html(res.body);
                        $("#quick-view-modal").modal()
                    })
                    .error(function(res) {
                        alert(res.text);
                    })
            });
            $('.quickview-close').click(function() {
                $('#quick-view-modal').css('display', 'none');
            });
            $('body').on('change', 'select[name=province]', function(e) {
                var pro = $('.field-input option:selected').val();
                var active = $('.field-input option:selected').data('active');
                // alert(active);
                $.ajax({
                    type: 'GET',
                    url: $('base').data('url') + 'modules/api.php?do=getListDistrict&province=' + $(this).val()
                }).success(function(res) {
                    $('select[name=district]').html(res);
                    if (active == 0) {
                        $('#payment_method_id_0').html('');
                        $('input#f1_false').prop("checked", false);
                        $("input#f1_true").prop("checked", true);
                    } else {
                        $('#payment_method_id_0').html('<label class="radio-label"><div class="radio-input"><input type="radio" id="f1_false" name="f1" class="input-radio" value="0" checked=""></div><span class="radio-label-primary">Giao tận nơi</span></label>');
                    }
                    if ($('base').attr('href') == $('base').data('url') && $('.formSearch.searchAjax').length) {
                        $('.formSearch.searchAjax').submit();
                    }
                })
            });
            $('select[name=district]').change(function() {
                var active = $(this).find(':selected').data('active');

                // alert(active);
                if (active == 1) {
                    $('#payment_method_id_0').html('<label class="radio-label"><div class="radio-input"><input type="radio" id="f1_false" name="f1" class="input-radio" value="0" checked=""></div><span class="radio-label-primary">Giao tận nơi</span></label>');
                    $('input#f1_false').prop("checked", true);
                    $("input#f1_true").prop("checked", false);
                    var pro = $(this).find(':selected').data('ship');
                    var price = $(this).data('price');
                    var total = pro + price;
                    var savedata = $.ajax({
                        type: 'GET',
                        // data: data,
                        // url: 'modules/action.php?do=order',
                        success: function() {
                            $('#ship').html(pro);
                            $('#total').html(total);
                            $('#ins_total').html('<input type="hidden" name="price" value="' + price + '" />');
                            $('#ins_ship').html('<input type="hidden" name="ship" value="' + pro + '" />');
                        }
                    });
                } else {
                    $('#payment_method_id_0').html('');
                    $('input#f1_false').prop("checked", false);
                    $("input#f1_true").prop("checked", true);
                    var pro = $(this).find(':selected').data('ship');
                    var price = $(this).data('price');
                    var total = pro + price;
                    var savedata = $.ajax({
                        type: 'GET',
                        // data: data,
                        // url: 'modules/action.php?do=order',
                        success: function() {
                            $('#ship').html(pro);
                            $('#total').html(total);
                            $('#ins_total').html('<input type="hidden" name="price" value="' + price + '" />');
                            $('#ins_ship').html('');
                        }
                    });
                }
            });
            $('body').on('change', '#section-payment-method input:radio', function() {
                $('#section-payment-method .content-box-row.content-box-row-secondary').addClass('hidden');

                var id = $(this).attr('id');

                if (id) {
                    var sub = $('body').find('.content-box-row.content-box-row-secondary[for=' + id + ']')

                    if (sub && sub.length > 0) {
                        $(sub).removeClass('hidden');
                    }
                }
            });
        });
    </script>
</body>
</html>