<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/themes/img/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('/themes/css/style_admin.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{ url('./admin') }}"
                                    class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('/themes/img/logos/dark-logo.svg') }}" width="180"
                                        alt="">
                                </a>
                                <p class="text-center">Your Social Campaigns</p>
                                <form action="{{ route('sign') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remember this Device
                                            </label>
                                        </div>
                                        <a class="text-primary fw-bold" href="{{ url('./index.html') }}">Forgot Password
                                            ?</a>
                                    </div>
                                    <x-login-button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                                        {{ __('Log In') }}</x-login-button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/themes/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('/themes/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
