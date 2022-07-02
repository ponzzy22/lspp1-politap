<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<<<<<<< HEAD
    <title>Register | LSP POLITAP</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/auth.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/shotcut.jpg') }}" />
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{asset('assets/images/logo/bnsp.png')}}" class="logo">
                            <img src="{{asset('assets/images/logo/kemendikbud_small.png')}}" class="logo3">
                            <img src="{{asset('assets/images/logo/politap_small.png')}}" class="logo3">
                            <img src="{{asset('assets/images/logo/lsp_small.jpg')}}" class="logo2"><br><br>
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="{{ asset('assets/images/auth/register.jpg') }}" class="image3">
=======
    <title>REGISTER-ASESI | LSP P1-POLITAP</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/lsp.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo/lsp.png') }}" alt="logo">
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
                                        <input type="number"
                                            class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0"
                                            name="email" value="{{ old('email') }}" minlength="10" required autocomplete="email"
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
                                        @error('jurusan_id')
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
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="role" value="User">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <h6 class="mb-0 mr-4 mt-2">Lembaga Sertifikasi Profesi Pihak Ke Satu Politektik Negeri Ketapang</h6>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Nama Lengkap</h6></label>
                                <input type="text" maxlength="50" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Nomor Induk Mahasiswa</h6></label>
                                <input type="number" required minlength="9" maxlength="50" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Email</h6></label>
                                <input type="email" maxlength="50" name="email2">
                                @error('email2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Jurusan</h6></label>
                                <select class="form-control form-control-lg" name="jurusan_id">
                                    <option value="" holder></option>
                                    @foreach ($jurusan as $result)
                                    <option value="{{ $result->id }}">
                                        {{ $result->jurusan }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('jurusan_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                                <input type="password" required
                                autocomplete="new-password"
                                class="@error('password') is-invalid @enderror" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Password Konfirmasi</h6></label>
                                <input type="password"
                                name="password_confirmation"
                                required autocomplete="new-password"
                                id="exampleInputPassword">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row px-3 mb-4">
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-block btn-danger text-center">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div  style="background-color: #ec3732;" class="bg text-white py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. Designed & Developed By <a href="http://informatika.politap.ac.id/" target="_blank"> Teknologi
                    Informatika </a> <a href="https://politap.ac.id/" target="_blank">Politeknik Negeri
                    Ketapang</small>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======

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

>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
</body>


</html>
