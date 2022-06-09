<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/real-estate/images/favicon.png') }}">
    <link href="{{ asset('assets/real-estate/css/style.css') }}" rel="stylesheet">
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
										<a href="index.html">
                                            <img src="{{ asset('assets/real-estate/images/logo-full.png') }}" alt="">
                                        </a>
									</div>
                                    <h4 class="text-center mb-4">@yield('title')</h4>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @yield('content')                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/real-estate/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/real-estate/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/real-estate/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/real-estate/js/deznav-init.js') }}"></script>
</body>
</html>