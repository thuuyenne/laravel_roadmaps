<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập</title>

    <!-- Bootstrap -->
    <link href="{{('/carsh-luanvan/public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{('/carsh-luanvan/public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{('/carsh-luanvan/public/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    {{-- <link href="../vendors/animate.css/animate.min.css" rel="stylesheet"> --}}

    <!-- Custom Theme Style -->
    <link href="{{('/carsh-luanvan/public/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('ad.post.login') }}" method="POST">
                        {{ csrf_field() }}
                        <h1>ĐĂNG NHẬP</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" required/>
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required/>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success">Log in</button>

                        </div>

                        <div class="clearfix"></div>


                    </form>
                </section>
            </div>


        </div>
    </div>
</body>

</html>
