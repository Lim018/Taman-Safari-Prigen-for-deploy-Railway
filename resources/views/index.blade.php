<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zoofari - Zoo & Safari Park Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('') }}landing/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('') }}landing/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('') }}landing/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('') }}landing/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('') }}landing/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



        {{-- <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row  d-none d-lg-flex topbar">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    <div class="login">
                        <a href="#" class="btn-login">Login</a>
                        <a href="#" class="btn-register">Register</a>
                      </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="{{ asset('') }}landing/img/icon/icon-10.png" alt="Icon">
            {{-- <h1 class="m-0 text-primary">Zoofari</h1> --}}
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="/landing-page" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="/jadwal" class="nav-item nav-link">Jadwal</a>
                <a href="service.html" class="nav-item nav-link">Event</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="animal.html" class="dropdown-item">Our Animals</a>
                        <a href="membership.html" class="dropdown-item">Membership</a>
                        <a href="visiting.html" class="dropdown-item">Visiting Hours</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            </div>
            <a href="/pesan" class="btn btn-primary">Buy Ticket<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5" id="home">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            {{-- <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                </div>
            </div> --}}
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/bg-1.jpg" alt="">
                    </div>
                    {{-- <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/carousel-2.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/carousel-3.jpg" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Selamat Datang di Taman Safari Prigen</p>
                    <h1 class="display-5 mb-4">Kenapa harus mengunjungi <span class="text-primary">Taman Safari Prigen</span></h1>
                    <p class="mb-4">Taman Safari Prigen adalah salah satu taman konservasi satwa terbesar di Asia Tenggara yang terletak di Kabupaten Pasuruan, Jawa Timur, Indonesia. Taman ini sering disebut juga sebagai Taman Safari Indonesia 2 dan menjadi bagian dari jaringan Taman Safari Indonesia. Berikut beberapa informasi utama tentang Taman Safari Prigen:</p>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Zona Safari</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Zona Rekreasi</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Zona Baby Zoo</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Konservasi Satwa</h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="https://www.indonesia-tourism.com/east-java/tourism/pasuruan/taman_safari/map/tamansafari_map.png">zoom map</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/map.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    {{-- <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Total Animal</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Daily Vigitors</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Total Membership</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Save Wild Life</p>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facts End -->


    <!-- Service Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Services</p>
                    <h1 class="display-5 mb-0">Special Services For <span class="text-primary">Zoofari</span> Visitors</h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Call for more info</p>
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-2.png" alt="Icon">
                    <h5 class="mb-3">Car Parking</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-3.png" alt="Icon">
                    <h5 class="mb-3">Animal Photos</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-4.png" alt="Icon">
                    <h5 class="mb-3">Guide Services</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-5.png" alt="Icon">
                    <h5 class="mb-3">Food & Beverages</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-6.png" alt="Icon">
                    <h5 class="mb-3">Zoo Shopping</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-7.png" alt="Icon">
                    <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-8.png" alt="Icon">
                    <h5 class="mb-3">Play Ground</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('') }}landing/img/icon/icon-9.png" alt="Icon">
                    <h5 class="mb-3">Rest House</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Service End -->


    <!-- Animal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Animals</p>
                    <h1 class="display-5 mb-0"><span class="text-primary">Taman Safari Prigen</span> Awsome Animals</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="{{ asset('') }}landing/img/animal-md-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('') }}landing/img/animal-md-1.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="{{ asset('') }}landing/img/animal-lg-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('') }}landing/img/animal-lg-1.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="{{ asset('') }}landing/img/animal-lg-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('') }}landing/img/animal-lg-2.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="{{ asset('') }}landing/img/animal-md-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('') }}landing/img/animal-md-2.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="{{ asset('') }}landing/img/animal-md-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('') }}landing/img/animal-md-3.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="{{ asset('') }}landing/img/animal-lg-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('') }}landing/img/animal-lg-3.jpg" alt="">
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Animal End -->


    <!-- Visiting Hours Start -->
    <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-12 text-white mb-5">Visiting Hours</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Senin</span>
                            <span>09:00 - 18:00</span>
                        </li>
                        <li class="list-group-item">
                            <span>Selasa</span>
                            <span>09:00 - 18:00</span>
                        </li>
                        <li class="list-group-item">
                            <span>Rabu</span>
                            <span>09:00 - 18:00</span>
                        </li>
                        <li class="list-group-item">
                            <span>Kamis</span>
                            <span>09:00 - 18:00</span>
                        </li>
                        <li class="list-group-item">
                            <span>Jumat</span>
                            <span>09:00 - 18:00</span>
                        </li>
                        <li class="list-group-item">
                            <span>Sabtu</span>
                            <span>09:00 - 18:00</span>
                        </li>
                        <li class="list-group-item">
                            <span>Minggu</span>
                            <span>Tutup</span>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Contact Info</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Office</td>
                                <td>123 Street, New York, USA</td>
                            </tr>
                            <tr>
                                <td>Zoo</td>
                                <td>123 Street, New York, USA</td>
                            </tr>
                            <tr>
                                <td>Ticket</td>
                                <td>
                                    <p class="mb-2">+012 345 6789</p>
                                    <p class="mb-0">ticket@example.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>
                                    <p class="mb-2">+012 345 6789</p>
                                    <p class="mb-0">support@example.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Visiting Hours End -->


    <!-- Membership Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Membership</p>
                    <h1 class="display-5 mb-0">You Can Be A Proud Member Of <span class="text-primary">Zoofari</span></h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Special Pricing</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/animal-lg-1.jpg" alt="">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">Popular</h4>
                        <h3 class="text-primary mb-4">$99.00</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
                        <p><i class="fa fa-check text-primary me-3"></i>2 adult and 2 child</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/animal-lg-2.jpg" alt="">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Standard</h4>
                        <h3 class="text-primary mb-4">$149.00</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                        <p><i class="fa fa-check text-primary me-3"></i>4 adult and 4 child</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/animal-lg-3.jpg" alt="">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Premium</h4>
                        <h3 class="text-primary mb-4">$199.00</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                        <p><i class="fa fa-check text-primary me-3"></i>6 adult and 6 child</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Membership End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Clients Say!</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    {{-- <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('') }}landing/img/testimonial-1.jpg" style="width: 100px; height: 100px;"> --}}
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore laborum iusto amet voluptatem molestiae quibusdam voluptatum architecto culpa. Beatae accusantium ipsa et nostrum illum nisi dignissimos alias, mollitia cumque eos!</p>
                        <h5 class="mb-1">alim</h5>
                        {{-- <span class="fst-italic">Profession</span> --}}
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    {{-- <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('') }}landing/img/testimonial-2.jpg" style="width: 100px; height: 100px;"> --}}
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem necessitatibus iste similique ipsum voluptas ipsa. Fugit rem doloribus velit reprehenderit voluptatum non totam, minima earum quos, necessitatibus molestias accusantium ipsam.</p>
                        <h5 class="mb-1">bowil</h5>
                        {{-- <span class="fst-italic">Profession</span> --}}
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    {{-- <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('') }}landing/img/testimonial-3.jpg" style="width: 100px; height: 100px;"> --}}
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem necessitatibus iste similique ipsum voluptas ipsa. Fugit rem doloribus velit reprehenderit voluptatum non totam, minima earum quos, necessitatibus molestias accusantium ipsam.</p>
                        <h5 class="mb-1">Abiddar</h5>
                        {{-- <span class="fst-italic">Profession</span> --}}
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    {{-- <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="{{ asset('') }}landing/img/testimonial-3.jpg" style="width: 100px; height: 100px;"> --}}
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem necessitatibus iste similique ipsum voluptas ipsa. Fugit rem doloribus velit reprehenderit voluptatum non totam, minima earum quos, necessitatibus molestias accusantium ipsam.</p>
                        <h5 class="mb-1">Vinno</h5>
                        {{-- <span class="fst-italic">Profession</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Popular Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>