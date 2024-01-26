<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Informasi Naik Haji</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="../../enduser/css/bootstrap.min.css" rel="stylesheet">

        <link href="../../enduser/css/bootstrap-icons.css" rel="stylesheet">

        <link href="../../enduser/css/templatemo-festava-live.css" rel="stylesheet">
        
<!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->
    </head>
    
    <body>

        <main>

            <header class="site-header">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 col-12 d-flex flex-wrap">
                            <p class="d-flex me-4 mb-0">
                                <i class="bi-person custom-icon me-2"></i>
                                <strong class="text-dark">Selamat Datang di SI Haji</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </header>


            @if(isset($includeNavbar) && $includeNavbar)
                @include('layouts2.navbar')
            @endif
            
            @yield('content')
            
        </main>

        @include('layouts2.footer')

<!--

T e m p l a t e M o

-->

        <!-- JAVASCRIPT FILES -->
        <script src="../../enduser/js/jquery.min.js"></script>
        <script src="../../enduser/js/bootstrap.min.js"></script>
        <script src="../../enduser/js/jquery.sticky.js"></script>
        <script src="../../enduser/js/click-scroll.js"></script>
        <script src="../../enduser/js/custom.js"></script>

    </body>
</html>