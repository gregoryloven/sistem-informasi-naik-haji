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


    <!-- <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Event Schedule</h1>

                    <div class="table-responsive">
                        <table class="schedule-table table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>

                                    <th scope="col">Wednesday</th>

                                    <th scope="col">Thursday</th>

                                    <th scope="col">Friday</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">Day 1</th>

                                    <td class="table-background-image-wrap pop-background-image">
                                        <h3>Pop Night</h3>

                                        <p class="mb-2">5:00 - 7:00 PM</p>

                                        <p>By Adele</p>

                                        <div class="section-overlay"></div>
                                    </td>

                                    <td style="background-color: #F3DCD4"></td>

                                    <td class="table-background-image-wrap rock-background-image">
                                        <h3>Rock & Roll</h3>

                                        <p class="mb-2">7:00 - 11:00 PM</p>

                                        <p>By Rihana</p>

                                        <div class="section-overlay"></div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Day 2</th>
        
                                    <td style="background-color: #ECC9C7"></td>

                                    <td>
                                        <h3>DJ Night</h3>

                                        <p class="mb-2">6:30 - 9:30 PM</p>

                                        <p>By Rihana</p>
                                    </td>

                                    <td style="background-color: #D9E3DA"></td>
                                </tr>

                                <tr>
                                    <th scope="row">Day 3</th>
        
                                    <td class="table-background-image-wrap country-background-image">
                                        <h3>Country Music</h3>

                                        <p class="mb-2">4:30 - 7:30 PM</p>

                                        <p>By Rihana</p>

                                        <div class="section-overlay"></div>
                                    </td>

                                    <td style="background-color: #D1CFC0"></td>

                                    <td>
                                        <h3>Free Styles</h3>

                                        <p class="mb-2">6:00 - 10:00 PM</p>

                                        <p>By Members</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


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