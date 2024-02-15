@extends('layouts2.enduser', ['includeNavbar' => true])

@section('content')

    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    <!-- <small>Festava Live Presents</small> -->

                    <h1 class="text-white mb-5">Pendaftaran Naik Haji</h1>

                    <a class="btn custom-btn smoothscroll" href="/daftar-haji/create">Daftar Sekarang</a>
                </div>

                <!-- <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                    <div class="date-wrap">
                        <h5 class="text-white">
                            <i class="custom-icon bi-clock me-2"></i>
                            10 - 12<sup>th</sup>, Dec 2023
                        </h5>
                    </div>

                    <div class="location-wrap mx-auto py-3 py-lg-0">
                        <h5 class="text-white">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            National Center, United States
                        </h5>
                    </div>

                    <div class="social-share">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                            <span class="text-white me-3">Share:</span>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="../../enduser/video/mekah.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
        
    </section>


    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="services-info">
                        <h2 class="text-white mb-4">Doa</h2>

                        <h6 class="text-white mt-4">Tawaf (Mencari)</h6>
                        <p class="text-white">"Labbaik Allahumma Labbaik. Labbaik, la sharika laka, labbaik. Innal hamda wannimata laka wal mulk, la sharika lak."</p>

                        <h6 class="text-white mt-4">Doa di Maqam Ibrahim</h6>

                        <p class="text-white">"Rabbana atina fid-dunya hasanatan wa fil 'akhirati hasanatan waqina 'adhaban-nar."</p>

                        <h6 class="text-white mt-4">Doa di Arafah (haji)</h6>

                        <p class="text-white">"La ilaha illallah wahdahu la sharika lah, lahul-mulku wa lahul-hamdu wa huwa 'ala kulli shay'in qadir."</p>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="about-text-wrap">
                        <img src="../../enduser/images/mekah1.jpg" class="about-image img-fluid">

                        <!-- <div class="about-text-info d-flex">
                            <div class="d-flex">
                                <i class="about-text-icon bi-person"></i>
                            </div>


                            <div class="ms-4">
                                <h3>a happy moment</h3>

                                <p class="mb-0">your amazing festival experience with us</p>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="artists-section section-padding" id="section_3">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Album</h1>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="../../enduser/images/artists/mekah1.jpg" class="artists-image img-fluid">
                        </div>

                    </div>

                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="../../enduser/images/artists/haji4.jpg" class="artists-image img-fluid">
                        </div>

                    </div>

                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="../../enduser/images/artists/jamaah1.jfif" class="artists-image img-fluid">
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="../../enduser/images/artists/mekah2.jpg" class="artists-image img-fluid">
                        </div>

                    </div>

                    <div class="artists-thumb">
                        <img src="../../enduser/images/artists/mekah3.jpg" class="artists-image img-fluid">

                        <!-- <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Bruno Bros
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                October 8, 1985
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Pop
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Bruno Official</a>
                            </p>
                        </div> -->
                    </div>

                    <div class="artists-thumb">
                        <img src="../../enduser/images/artists/jamaah2.jpg" class="artists-image img-fluid">
                    </div>

                    <div class="artists-thumb">
                        <img src="../../enduser/images/artists/jamaah3.jpg" class="artists-image img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

            <div class="col-lg-12 col-12 mb-6 mb-lg-12 d-flex align-items-center">
                <div class="services-info">
                    <h2 class="text-white mb-4">Estimasi Biaya</h2>

                    <h6 class="text-white mt-4">2023</h6>
                    <p class="text-white" style="font-size: 2em;">Pemerintah melalui Kementerian Agama dan Komisi VIII DPR-RI menyepakati besaran Biaya Penyelenggaraan Ibadah Haji (BPIH) 1444 H/2023 M rata-rata Rp90.050.637,26 per jemaah haji reguler. Biaya ini ditetapkan dalam Rapat Panitia Kerja (Panja) Komisi VIII DPR dan Kementerian Agama pada Rabu. Biaya Perjalanan Ibadah Haji (Bipih) yang harus dibayar Rp 49.812.700,26.</p>

                </div>
            </div>

            </div>
        </div>
    </section>


    <section class="pricing-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Paket</h2>
                </div>
                
                <div class="col-lg-6 col-12">
                    <div class="pricing-thumb">
                        <div class="d-flex">
                            <div>
                                <h3><small>Express</small> 20 Tahun</h3>

                                <p>Including:</p>
                            </div>

                            <!-- <p class="pricing-tag ms-auto">Save up to <span>50%</span></h2> -->
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Transportasi</li>

                            <li class="pricing-list-item">Akomodasi</li>

                            <li class="pricing-list-item">Guide</li>

                            <li class="pricing-list-item">Konsumsi</li>
                        </ul>

                        <!-- <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                            <span>Buy Ticket</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                        </a> -->
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                    <div class="pricing-thumb">
                        <div class="d-flex">
                            <div>
                                <h3><small>Regular</small> 29 Tahun</h3>

                                <p>Including:</p>
                            </div>
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Transportasi</li>

                            <li class="pricing-list-item">Akomodasi</li>

                            <li class="pricing-list-item">Guide</li>

                            <li class="pricing-list-item">Konsumsi</li>
                        </ul>

                        <!-- <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                            <span>Buy Ticket</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                        </a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection