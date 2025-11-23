<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Stok KFC - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kfc-theme.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- LEFT IMAGE -->
                            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center bg-white">
                                <img src="https://upload.wikimedia.org/wikipedia/sco/b/bf/KFC_logo.svg"
                                    alt="KFC Logo"
                                    class="img-fluid"
                                    style="max-width: 65%; filter: drop-shadow(0 2px 6px rgba(0,0,0,0.2));">
                            </div>

                            <!-- RIGHT FORM -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="p-5 w-100">

                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Welcome Back!</h1>
                                        <p class="text-muted small">Silakan login untuk mengelola stok KFC</p>
                                    </div>

                                    {{-- Pesan Error --}}
                                    @if ($errors->any())
                                        <div class="alert alert-danger small">
                                            <ul class="m-0 ps-3">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        {{-- Email --}}
                                        <div class="form-group mb-3">
                                            <input type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                name="email"
                                                value="{{ old('email') }}"
                                                required
                                                autofocus
                                                placeholder="Enter Email Address...">
                                            @error('email')
                                                <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        {{-- Password --}}
                                        <div class="form-group mb-3">
                                            <input type="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                name="password"
                                                required
                                                placeholder="Password">
                                            @error('password')
                                                <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>
