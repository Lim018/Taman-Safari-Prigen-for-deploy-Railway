@extends('pages.app')

@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5" id="home">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            {{-- <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                </div>
            </div> --}}
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item rounded-3">
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
            <h1 class="display-5 mb-4 text-center" style="font-family: 'Mikado', sans-serif; font-weight: 900; margin: 0;" data-wow-delay="0.1s"><span style="color: #90C659;">Buy Ticket Now!</span></h1>
    <div class="max-w-2xl mx-auto p-6 bg-[#f5f9f5] rounded-lg">
        {{-- <form action="{{ route('validate.ticket') }}" method="POST">
            @csrf --}}
            <div class="p-8 bg-[#f3f7ed] text-center">
                <!-- Pilihan Tombol -->
                <div class="flex justify-center gap-8 mb-6 text-gray-700">
                    <button id="indonesian" class="btn-option">Indonesian (KTP/KITAS)</button>
                    <button id="foreigner" class="btn-option">Foreigners</button>
                </div>
                <br>
            
                <!-- Informasi Indonesian -->
                <div id="info-indonesian" class="space-y-4 text-black hidden">
                    <div class="font-bold">
                        For Indonesian nationals with <span class="italic">KTP/Student Card</span> or foreigners with valid KITAS<br>
                        <span class="text-gray-600 font-medium">
                            Berlaku untuk warga negara Indonesia dengan KTP/Kartu Pelajar atau orang asing dengan KITAS yang berlaku
                        </span>
                    </div>
                    <div class="font-bold">
                        1. One (1) <span class="italic">KTP/Student Card/KITAS</span> is valid for one (1) ticket.<br>
                        <span class="text-gray-600 font-medium">
                            Satu (1) KTP/Kartu Pelajar/KITAS berlaku untuk satu (1) tiket.
                        </span>
                    </div>
                    <div>
                        2. Please present either mobile or printed voucher along with your KITAS at the counter for redemption.
                    </div>
                    <div>
                        3. For more information about our promotion and programs, please follow our instagram 
                        <span class="font-semibold">@tamansafari.prigen</span>.
                    </div>
                    <div>
                        <br>
                        <a href="/pesan" class="btn btn-primary">Buy Ticket<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            
                <!-- Informasi Foreigners -->
                <div id="info-foreigner" class="space-y-4 text-black hidden">
                    <div class="font-bold">
                        For foreign nationals, please prepare a valid passport or travel document.<br>
                        <span class="text-gray-600 font-medium">
                            Berlaku untuk warga negara asing, harap siapkan paspor atau dokumen perjalanan yang valid.
                        </span>
                    </div>
                    <div class="font-bold">
                        1. One (1) passport/travel document is valid for one (1) ticket.<br>
                        <span class="text-gray-600 font-medium">
                            Satu (1) paspor/dokumen perjalanan berlaku untuk satu (1) tiket.
                        </span>
                    </div>
                    <div>
                        2. Please present either mobile or printed voucher at the counter for redemption.
                    </div>
                    <div>
                        3. For more information about our promotion and programs, please follow our instagram 
                        <span class="font-semibold">@tamansafari.prigen</span>.
                    </div>
                    <br>
                    <a href="/pesan" class="btn btn-primary">Buy Ticket<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
            
        {{-- </form> --}}
    </div>
    <br>
    <br>


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
    {{-- <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Selamat Datang di Taman Safari Prigen</p>
                    <h1 class="display-5 mb-4" style="font-family: 'Mikado', sans-serif; font-weight: 900; margin: 0;"><span style="color: #90C659;">Kenapa harus mengunjungi</span> <span style="color: #274E13;">Taman Safari Prigen?</span></h1>
                    <p class="mb-4">Taman Safari Prigen adalah salah satu taman konservasi satwa terbesar di Asia Tenggara yang terletak di Kabupaten Pasuruan, Jawa Timur, Indonesia. Taman ini sering disebut juga sebagai Taman Safari Indonesia 2 dan menjadi bagian dari jaringan Taman Safari Indonesia. Berikut beberapa informasi utama tentang Taman Safari Prigen:</p>
                    <h5 class="mb-3"><i class="far fa-check-circle me-3" style="color: #90C659;"></i>Zona Safari</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle me-3" style="color: #90C659;"></i>Zona Rekreasi</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle me-3" style="color: #90C659;"></i>Zona Baby Zoo</h5>
                    <h5 class="mb-3"><i class="far fa-check-circle me-3" style="color: #90C659;"></i>Konservasi Satwa</h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="https://www.indonesia-tourism.com/east-java/tourism/pasuruan/taman_safari/map/tamansafari_map.png">zoom map</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('') }}landing/img/map.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->

    <!-- Animal Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Animals</p>
                    <h1 class="display-5 mb-0" style="font-family: 'Mikado', sans-serif; font-weight: 900; margin: 0;"><span style="color: #274E13;">Taman Safari Prigen</span> <span style="color: #90C659;">Awsome Animals</span></h1>
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
    </div> --}}
    <!-- Animal End -->


    <!-- Visiting Hours Start -->
    {{-- <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-12 text-white mb-5">Visiting Hours</h1>
                    <ul class="list-group list-group-flush">
                        @foreach ($jadwals as $jadwal)
                            <li class="list-group-item">
                                <span>{{ $jadwal->HARI }}</span>
                                <span>{{ \Carbon\Carbon::createFromFormat('H:i:s', $jadwal->JAM_BUKA)->format('H:i') }} - 
                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $jadwal->JAM_TUTUP)->format('H:i') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
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


    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 mb-4 text-center" style="font-family: 'Mikado', sans-serif; font-weight: 900; margin: 0;" data-wow-delay="0.1s"><span style="color: #90C659;">Our Client Say</span></h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item text-center">
                        <div class="testimonial-text rounded text-center p-4">
                            <p>{{ Str::limit($testimonial->MESSAGE_TEXT, 200) }}</p>
                            <h5 class="mb-1">{{ $testimonial->CREATE_BY }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection


@push('scripts')
<script>
    $(document).ready(function(){
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            margin: 25,
            loop: true,
            center: true,
            dots: false,
            nav: true,
            navText : [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ],
            responsive: {
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                992:{
                    items:3
                }
            }
        });
    });
</script>
@endpush
