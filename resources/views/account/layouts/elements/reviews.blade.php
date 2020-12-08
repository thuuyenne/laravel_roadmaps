<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phương tiện & thời gian</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Stepper CSS -->
    <link href="css/addons-pro/steppers.css" rel="stylesheet">
    <!-- Stepper CSS - minified-->
    <link href="css/addons-pro/steppers.min.css" rel="stylesheet">
    <!-- Stepper JavaScript -->
    <script type="text/javascript" src="js/addons-pro/steppers.js"></script>
    <!-- Stepper JavaScript - minified -->
    <script type="text/javascript" src="js/addons-pro/steppers.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../js/vehicle.js" language="javascript"></script>
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/bebasNeu.ttf')}}">
    <link rel="stylesheet" href="{{('/carsh-luanvan/public/css-account/review.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="mb-10 text-center">Đánh giá & Bình luận</h4>
                <div class="row align-items-center">
                    <div class="col-12 col-md-auto">

                    </div>
                    <div class="col-12 col-md text-md-center">
                        <div class="rating text-dark h6 mb-4 mb-md-0" data-value="4">
                            <div class="rating-item">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="rating-item">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="rating-item">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="rating-item">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="rating-item">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <strong class="font-size-sm ml-2">Đánh giá (1)</strong>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a class="btn btn-sm btn-dark" data-toggle="collapse" href="#reviewForm">viết bình luận</a>
                    </div>
                </div>
                <div class="collapse" id="reviewForm">
                    <hr class="my-8">
                    <form>
                        <div class="row">
                            <div class="col-12 mb-6 text-center">
                                <p class="mb-1 font-size-xs">Score:</p>
                                <div class="rating-form">
                                    <input class="rating-input" type="range" min="1" max="5" value="5">
                                    <div class="rating h5 text-dark" data-value="5">
                                        <div class="rating-item">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="rating-item">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="reviewName">Tên:</label>
                                    <input class="form-control form-control-sm" id="reviewName" type="text" placeholder="Tên *" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="reviewEmail">Email:</label>
                                    <input class="form-control form-control-sm" id="reviewEmail" type="email" placeholder="Email *" required="">
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="sr-only" for="reviewTitle">Tiêu đề:</label>
                                    <input class="form-control form-control-sm" id="reviewTitle" type="text" placeholder="Tiêu đề *" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="sr-only" for="reviewText">Đánh giá:</label>
                                    <textarea class="form-control form-control-sm" id="reviewText" rows="5" placeholder="Bình luận *" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-outline-dark" type="submit">Đăng bình luận</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-8">
                    <div class="review">
                        <div class="review-body">
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <div class="avatar avatar-xxl mb-6 mb-md-0">
                                        <span class="avatar-title rounded-circle">
                                            <i class="fa fa-user"></i>
                                         </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="row mb-6">
                                        <div class="col-12">
                                            <div class="rating font-size-sm text-dark" data-value="5">
                                                <div class="rating-item">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="rating-item">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <span class="font-size-xs text-muted">
                            thu uyên, <time datetime="2019-07-25">25 12 2020</time>
                          </span>

                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <p class="mb-2 font-size-lg font-weight-bold">
                                        CHUYẾN XE TUYỆT VỜI
                                    </p>

                                    <!-- Text -->
                                    <p class="text-gray-500">
                                        Tôi cảm thấy hài lòng với chuyến đi này.Thoải mái và rất đúng giờ.
                                    </p>

                                    <!-- Footer -->
                                    <div class="row align-items-center">
                                        <div class="col-auto d-none d-lg-block">

                                            <!-- Text -->


                                        </div>
                                        <div class="col-auto mr-auto">

                                            <!-- Rate -->
                                            <div class="rate">

                                            </div>

                                        </div>
                                        <div class="col-auto d-none d-lg-block">

                                            <!-- Text -->
                                            <p class="mb-0 font-size-sm">bình luận (0)</p>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Button -->
                                            <a class="btn btn-xs btn-outline-border" href="#!">bình luận </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review -->


                </div>


            </div>
        </div>
    </div>
</body>

</html>