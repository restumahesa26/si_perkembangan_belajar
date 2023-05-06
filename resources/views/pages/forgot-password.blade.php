<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lupa Password</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('backend/src/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ url('backend/src/assets/css/styles.min.css') }}" />
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
                                <a href="{{ route('login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ url('backend/src/assets/images/logos/dark-logo.png') }}" width="180" alt="">
                                </a>
                                <p class="text-center">Halaman Reset Password</p>
                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    @if ($errors->all())
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                        <li class="text-danger">{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="email" placeholder="Masukkan Email">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Reset Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('backend/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('backend/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
