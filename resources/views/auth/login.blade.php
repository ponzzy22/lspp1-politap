<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN-ASESI | LSP P1-POLITAP</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/lsp.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo/lsp.png') }}" alt="logo">
                            </div>
                            <h4>Login Asesi</h4>
                            <h6 class="font-weight-light">Senang Melihat Anda Kembali</h6>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">NIM</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fas fa-graduation-cap text-danger"></i>
                                            </span>
                                        </div>
                                        <input type="number"
                                            class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0"
                                            id="email" name="email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus placeholder="NIM">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fa fa-lock text-danger"></i>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            form-control-lg border-left-0" required autocomplete="current-password"
                                            id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label  text-muted" for="remember">
                                            <input type="checkbox" name="remember" id="remember"
                                                class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                            Ijinkan saya masuk
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="my-3">
                                    <button type="submit"
                                        class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Belum Punya Akun? <a href="{{ route('reg') }}" class="text-primary">Daftar
                                        Sini</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-row" style="background-image: url('assets/images/auth/login.png'); background-size: cover">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Designed &
                            Developed By Politeknik Negeri Ketapang 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/google-maps.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('assets/js/form-addons.js') }}"></script>
    <script src="{{ asset('assets/js/x-editable.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('assets/js/form-repeater.js') }}"></script>
    <script src="{{ asset('assets/js/alerts.js') }}"></script>
    <script src="{{ asset('assets/js/avgrund.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>

</body>


</html>
