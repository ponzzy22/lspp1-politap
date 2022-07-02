@extends('layout.client')
@section('judul')
    Tentang | LSP POLITAP
@endsection
<<<<<<< HEAD
@section('profil')
    active
@endsection
@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</h1>
                    <span>
                        <a href="#profil">Profil singkat</a> /
                        <a href="#visi">Visi</a> /
                        <a href="#visi">Misi</a> /
                        <a href="#visi">Motto</a> /
                        <a href="#logo">Logo</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Koten ***** -->
    <!-- Profil singkat -->
    <div  class="more-info">
        <div class="container">
            <div id="profil" class="section-heading">
                <h2>Tentang LSP Politeknik Negeri Ketapang<em></em></h2>
                <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-content">
                                    <span>Lembaga Sertifikasi Profesi Pihak Kesatu Politeknik Negeri Ketapang</span>
                                    <ul class="u-custom-font u-font-arial u-text u-text-2"
                                        data-animation-name="customAnimationIn" data-animation-duration="1000">
                                        <li> Lembaga Sertifikasi Profesi (LSP) Politeknik Negeri Ketapang adalah lembaga
                                            sertifikasi profesi yang telah memperoleh sertifikat lisensi No.
                                            BNSP-LSP-1214-ID dari
                                            Badan Nasional Sertifikasi Profesi
                                            (BNSP). dan memiliki Nomor SK
                                            KEP. 0429/BNSP/IV/2018.</li><br>
                                        <li>Sebagai lembaga pelaksanaan kegiatan sertifikasi profesi kategori P1, skema
                                            yang
                                            dimiliki LSP&nbsp; Politeknik Negeri Ketapang diselaraskan dengan Kerangka
                                            Kualifikasi
                                            Nasional Indonesia (KKNI) dan Standar Kualifikasi Kerja
                                            Nasional Indonesia (SKKNI).&nbsp; </li><br>
                                        <li>
                                            Memiliki
                                            6 skema, LSP&nbsp; Politeknik Negeri Ketapang siap melaksanakan uji
                                            kompetensi
                                            pada seluruh
                                            mahasiswa Politeknik Negeri Ketapang dari berbagai program
                                            studi dalam rangka menyiapkan lulusan Politeknik Negeri Ketapang yang
                                            memiliki kompetensi mumpuni sesuai bidangnya dan memiliki nilai lebih di
                                            pasar tenaga kerja
                                            baik
                                            nasional maupun Internasional.
                                        </li><br>
                                    </ul>
                                </div>
=======
@section('css')
    <link rel="stylesheet" href="{{ asset('client/Logo.css') }}" media="screen">
@endsection
@section('isi')
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-942b">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-title u-text-1"><span
                                        class="u-file-icon u-icon u-text-black u-icon-1"><img src="{{ asset('images/logo/58061.png') }}"
                                            alt=""></span>&nbsp;Tentang LSP-POLITAP
                                </h1>
                                <div class="u-border-3 u-border-custom-color-1 u-line u-line-horizontal u-line-1"
                                    data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-2" id="sec-73aa">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-60 u-size-xs-60 u-image-1"
                            src="" data-image-width="1280" data-image-height="853">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                @foreach ($profil as $asu)
                                <p class="u-text u-text-1">
                                    {!! $asu->profil !!}
                                </p>
                                    @endforeach
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Visi misi motto -->
    <div id="visi" class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Visi, Misi & Motto<em></em></h2>
                        <span>▬▬▬▬▬<em>▬▬▬▬▬</em></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">
                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Visi</h4><br>
                                <p>"Menjadi Lembaga Sertifikasi Profesi yang terpecaya dalam menjamin kompetensi sumberdaya
                                    manusia agar mampu bersaing di era globalisasi."</p><br><br>
                                <h4>Motto</h4><br>
                                <p>"Kompeten , Unggul dan, Profesional"</p>
                                <br><br><br><br>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Misi</h4><br>
                                <p>1. Melaksanakan Uji Kompetensi yang sistematis dan konsisten.</p>
                                <p>2. Mengembangkan sumber daya manusia di LSP Politeknik Negeri Ketapang dan seluruh
                                    asesor.</p>
                                <p>3. Mengembangkan skema dan perangkat asesmen secara berkelanjutan.</p>
                                <p>4. Mengembangkan sarana dan prasarana uji kompetensi.</p>
                                <p>5. Mengembangkan sistem informasi website untuk kepentingan internal dan eksternal LSP
                                    POLITAP.</p>
                                <p>6. Mengembangkan jejaring dan kerjasama yang sinergis dengan stakeholder. </p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo -->
    <div id="logo" class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-8 align-self-center">
                                <div class="right-content">
                                    <h2>Makna Logo LSP Politeknik Negeri Ketapang<em> </em></h2>
                                    <ol class="text-dark">
                                        <li>LSP, merupakan singkatan dari Lembaga Sertifikasi Profesi; </li>
                                        <li>POLITAP, merupakan singkatan dari Politeknik Negeri Ketapang;</li>
                                        <li>Latar belakang tulisan warna merah-putih seperti bendera negara, melambangkan
                                            perjuangan Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang (LSP POLITAP)
                                            yang tiada henti untuk menjadi lembaga sertifikasi profesi yang profesional dan
                                            terpercaya; </li>
                                        <li>Lingkaran berwarna merah seperti bola dunia, menunjukkan eksistensi
                                            perjuangan Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang (LSP POLITAP)
                                            hingga ketingkat internasional; </li>
                                        <li>Simbol centang berwarna merah di dalam lingkaran, merupakan gambaran dari
                                            komitmen perjuangan Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang
                                            (LSP-POLITAP) untuk menghasilkan sumberdaya manusia yang berkualitas. </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="left-image-logo">
                                    <img src="{{ asset('general/assets/images/lsp_big.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <!-- ***** Akhir Konten ***** -->
=======
>>>>>>> b6059d523f85d340682094e54c8f33088f088db9
@endsection
