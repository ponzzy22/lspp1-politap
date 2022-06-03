<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>REGISTER-ASESI | LSP P1-POLITAP</title>
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/assets/images/logo/lsp.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="{{ asset('public/assets/images/logo/lsp.png') }}" alt="logo">
                            </div>
                            <h4>Belum Gabung kah?</h4>
                            <h6 class="font-weight-light">Ayo Gabung Sekarang! Lengkapi Form Berikut:</h6><br>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fa fa-user text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid @enderror form-control-lg border-left-0"
                                            name="name" value="{{ old('name') }}" required autocomplete="name"
                                            autofocus placeholder="Nama Lengkap">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Induk Mahasiswa</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fas fa-graduation-cap text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text"
                                            class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Nomor Induk Mahasiswa">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fas fa-graduation-cap text-primary"></i>
                                            </span>
                                        </div>
                                        <select class="form-control form-control-lg" name="jurusan_id">
                                            <option value="" holder>Pilihan Jurusan</option>
                                            @foreach ($jurusan as $result)
                                                <option value="{{ $result->id }}">
                                                    {{ $result->jurusan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('email2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fas fa-envelope text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="email"
                                            class="form-control @error('email2') is-invalid @enderror form-control-lg border-left-0"
                                            name="email2" value="{{ old('email2') }}" required autocomplete="email"
                                            placeholder="Email">
                                        @error('email2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fa fa-lock text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror form-control-lg border-left-0"
                                            id="exampleInputPassword" name="password" required
                                            autocomplete="new-password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password Confirm</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fa fa-lock text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0"
                                            id="exampleInputPassword" name="password_confirmation" required
                                            autocomplete="new-password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        UP</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Sudah Punya Akun?
                                    <a href="{{ route('login') }}" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('public/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('public/assets/js/misc.js') }}"></script>
    <script src="{{ asset('public/assets/js/settings.js') }}"></script>
    <script src="{{ asset('public/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('public/assets/js/google-maps.js') }}"></script>
    <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('public/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('public/assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('public/assets/js/form-addons.js') }}"></script>
    <script src="{{ asset('public/assets/js/x-editable.js') }}"></script>
    <script src="{{ asset('public/assets/js/dropify.js') }}"></script>
    <script src="{{ asset('public/assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery-file-upload.js') }}"></script>
    <script src="{{ asset('public/assets/js/formpickers.js') }}"></script>
    <script src="{{ asset('public/assets/js/form-repeater.js') }}"></script>
    <script src="{{ asset('public/assets/js/alerts.js') }}"></script>
    <script src="{{ asset('public/assets/js/avgrund.js') }}"></script>
    <script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>

</body>

</html>
