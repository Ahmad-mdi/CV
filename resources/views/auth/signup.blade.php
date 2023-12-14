<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>login</title>
    <link href="/panel/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/panel/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">SignUp</h1>
                                    @if (session('successSignup'))
                                        <span class="alert alert-success">{{@session('successSignup')}}</span>
                                    @endif
                                </div>
                                <form action="{{url('/signup')}}" method="post" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control form-control-user"
                                               id="exampleInputPhone" aria-describedby="phoneHelp"
                                               placeholder="Enter Name...">
                                    </div>
                                    <div class="form-group">
                                        <input name="lastName" type="text" class="form-control form-control-user"
                                               id="exampleInputPhone" aria-describedby="phoneHelp"
                                               placeholder="Enter LastName...">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control form-control-user"
                                               id="exampleInputPhone" aria-describedby="phoneHelp"
                                               placeholder="Enter Email...">
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" type="text" class="form-control form-control-user"
                                               id="exampleInputPhone" aria-describedby="phoneHelp"
                                               placeholder="Enter Phone Number...">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    {{--<div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>--}}
                                    <input value="signup" type="submit" class="btn btn-success btn-user btn-block">
                                    <hr>
                                    @include('auth.error')
                                    {{--<hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>--}}
                                </form>
                                {{--<hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>
