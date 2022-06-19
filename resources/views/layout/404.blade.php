<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/404.css') }}">
</head>

<body>
    <a href="https://codepen.io/uiswarup/full/wvqNWOY" target="_blank">
        <header class="top-header">
        </header>

        <!--dust particel-->
        <div>
            <div class="starsec"></div>
            <div class="starthird"></div>
            <div class="starfourth"></div>
            <div class="starfifth"></div>
        </div>
        <!--Dust particle end--->


        <div class="lamp__wrap">
            <div class="lamp">
                <div class="cable"></div>
                <div class="cover"></div>
                <div class="in-cover">
                    <div class="bulb"></div>
                </div>
                <div class="light"></div>
            </div>
        </div>
        <!-- END Lamp -->
        <section class="error">
            <!-- Content -->
            <div class="error__content">
                <div class="error__message message">
                    <h1 class="message__title">404</h1>
                    <p class="message__text">
                        Halaman ini sedang dalam Pengembangan....
                    </p>
                </div>
                <div class="error__nav e-nav">
                    <a href="{{ url('/') }}" target="_blanck" class="e-nav__link"></a>
                </div>
            </div>
            <!-- END Content -->

        </section>

    </a>
</body>

</html>
