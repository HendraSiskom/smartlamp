<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from vora.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 18:40:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login SmartLamp</title>

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('vora/css/style.css')}}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                        <input type="hidden" class="form-control @error('email') is-invalid @enderror" id="email">
                                        @error('email')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong  style="color:black;">Silahkan Periksa Email dan Password Anda</strong>
                                            </span>
                                        @enderror
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('vora/vendor/global/global.min.js')}}"></script>
    <script src="{{ asset('vora/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('vora/js/custom.min.js')}}"></script>
    <script src="{{ asset('vora/js/dlabnav-init.js')}}"></script>
</body>

<!-- Mirrored from vora.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jul 2022 18:40:54 GMT -->

</html>