<!doctype html>
<html lang="es">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    @yield('metadata')

    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/media-queries.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/table_wiki.css') }}">
    @yield('css')
    <!-- Favicon and touch icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" sizes="189x256" href="{{ asset('favicon.ico') }}">
    <x-loader />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R6M2EM5XFC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R6M2EM5XFC');
    </script>
</head>

<body>

    <x-navegation-menu />
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            {{ $slot }}

            <div class="to-top m-2 text-right">
                <a class="btn btn-primary btn-customized-3" href="#" role="button">
                    <i class="fas fa-arrow-up"></i>
                </a>
            </div>

            <!-- Footer -->
            <footer class="footer-container bg-dark">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p>© {{ date('Y') }} Departamento de Tecnología UNAN-MANAGUA.</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Designed by: Carlos J Conto <i class="fas fa-robot"></i></p>
                        </div>
                    </div>
                </div>

            </footer>
        </div>
        <!-- End content -->
    </div>
    <!-- End wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('vendor/js/custom/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('vendor/js/custom/jquery-migrate-3.0.0.min.js') }}"></script> --}}
    <script src="{{ asset('vendor/js/custom/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/scripts.js') }}"></script>
    <script src="{{ asset('vendor/js/loader.js') }}"></script>
    @yield('js')
</body>

</html>
