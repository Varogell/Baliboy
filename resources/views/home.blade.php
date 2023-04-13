@extends('layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Delivering Your Logistics Swiftly</h2>
                <p data-aos="fade-up" data-aos-delay="100">Logiswift yang menggambarkan komitmen mereka untuk memberikan layanan logistik yang cepat, andal, dan efisien kepada pelanggan mereka. Dengan motto ini, Logiswift ingin menyampaikan bahwa mereka berusaha untuk menjadi mitra logistik yang andal dan efektif bagi pelanggan mereka, membantu mereka mengirimkan barang secara cepat dan tepat waktu ke mana pun di seluruh dunia.</p>

{{--                <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <input type="text" class="form-control" placeholder="ZIP code or CitY">--}}
{{--                    <button type="submit" class="btn btn-primary">Search</button>--}}
{{--                </form>--}}

                <hr style="height: 3px; color: white">
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="4032" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="660" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Gerai</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="5234" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Transaksi</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1322" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Pekerja</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{asset('img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="">
            </div>

        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main">

    <section id="featured-services" class="featured-services">
        <div class="container">
            <div class="section-header">
            </div>


        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                    <img src="{{('img/about.jpg')}}" class="img-fluid" alt="">
                    <a href="https://youtu.be/8qRXHx8fDvA" class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last  order-lg-first">
                    <h3>About Us</h3>
                    <p>
                        Logiswift adalah perusahaan logistik global yang berbasis di Indonesia. Didirikan pada tahun 2023, Logiswift menawarkan berbagai layanan logistik, termasuk pengiriman udara, laut, dan darat, penyimpanan dan pengelolaan gudang, penanganan dokumen, dan pengiriman paket. Perusahaan ini memiliki jaringan internasional yang luas, yang mencakup lebih dari 200 negara di seluruh dunia, dan terus berinovasi dalam teknologi dan proses untuk memastikan efisiensi dan kualitas layanan yang tinggi. Logiswift memfokuskan pada memberikan solusi logistik yang cepat, aman, dan andal kepada pelanggan mereka, serta menawarkan layanan pelanggan yang unggul dan harga yang kompetitif. Dengan kualitas layanan yang terpercaya dan profesional, Logiswift bertujuan untuk menjadi mitra logistik yang diandalkan bagi bisnis di seluruh dunia.
                    </p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>Relasi</h5>
                                <p>LogiSwift sudah banyak bekerja sama dengan perusahan besar yang ada di dalam/luar negeri</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>Rute</h5>
                                <p>Rute kami hampir mencangkup seluruh wilayah indonesia</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Tracking</h5>
                                <p>Paket anda yang telah menggunakan jasa kami dapat ditrack kapan pun</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services service" class="featured-services" style="margin-top: -80px">
        <div class="container">
            <section id="pricing" class="pricing pt-0">
            <div class="container" data-aos="fade-up">
            <div class="section-header" style="margin-bottom: -80px">
                <span>Features</span>
                <h2>Features</h2>
            </div>
            </div>
            </section>
            <div class="row gy-4 ">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                    <div>
                        <h4 class="title">Paket</h4>
                        <p class="description">Paket yang telah anda serahkan akan kami sortir dengan baik & aman.</p>
                        <a href="/services" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                    <div>
                        <h4 class="title">Pengiriman</h4>
                        <p class="description">Pengiriman paket anda akan tiba tepat waktu jika tidak ada kendala bencana alam.</p>
                        <a href="/services" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 class="title">Kargo</h4>
                        <p class="description">Dengan jenis kargo pengiriman anda akan dapat kapasitas yang besar sesuai dengan kebutuhan anda.</p>
                        <a href="/services" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Featured Services Section -->


    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action mb-5">
        <div class="container" data-aos="zoom-out">

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3>Call To Action</h3>
                    <p> Jika Anda tertarik dengan layanan kami anda dapat melakukan order. Klik Dibawah untuk Memulai Order anda</p>
                    <a class="cta-btn" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Order</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Harga</span>
                <h2>Harga</h2>

            </div>

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Reguler</h3>
                        <h4><sup>Rp.</sup>7000<span> / kg</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Paket sampai ketujuan</li>
                            <li><i class="bi bi-check"></i> Tracking Paket anda</li>
                            <li class="na"><i class="bi bi-x"></i> <span>Pick Up</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Asuransi</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Refund</span></li>
                        </ul>
                        <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-item featured">
                        <h3>Express</h3>
                        <h4><sup>Rp.</sup>12.000<span> / kg</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Paket sampai ketujuan</li>
                            <li><i class="bi bi-check"></i> Tracking Paket anda</li>
                            <li class="na"><i class="bi bi-x"></i> <span>Pick Up</span></li>
                            <li><i class="bi bi-check"></i> Asuransi</li>
                            <li class="na"><i class="bi bi-x"></i> <span>Refund</span></li>
                        </ul>
                        <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-item">
                        <h3>Kargo</h3>
                        <h4><sup>Rp.</sup>20.000<span> / kg</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Paket sampai ketujuan</li>
                            <li><i class="bi bi-check"></i> Tracking Paket anda</li>
                            <li><i class="bi bi-check"></i> Pick Up</li>
                            <li><i class="bi bi-check"></i> Asuransi</li>
                            <li><i class="bi bi-check"></i> Refund</li>
                            </ul>
                        <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buy Now</a>
                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="slides-1 swiper" data-aos="fade-up">
                <h3 class="testimonial-item" style="text-align: center">Partners</h3>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('img/partners/aple.png')}}" class="testimonial-img" alt="">
                            <h3>Apple</h3>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Apple Inc. adalah perusahaan teknologi multinasional yang berkantor pusat di Cupertino, California, Amerika Serikat. Perusahaan ini terkenal karena produk-produk inovatifnya seperti iPhone, iPad, MacBook, Apple Watch, dan Apple TV.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('img/partners/asus.png')}}" class="testimonial-img" alt="">
                            <h3>Asus</h3>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                ASUS adalah perusahaan teknologi multinasional yang berbasis di Taipei, Taiwan. Perusahaan ini terkenal karena memproduksi berbagai jenis perangkat keras komputer seperti laptop, PC desktop, tablet, smartphone, dan komponen komputer seperti motherboard, kartu grafis, dan router jaringan. Selain itu, ASUS juga memiliki lini produk gaming yang populer dengan merek ROG (Republic of Gamers).
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('img/partners/lambo.png')}}" class="testimonial-img" alt="">
                            <h3>Lamborghini</h3>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Lamborghini adalah produsen mobil sport dan supercar mewah yang berkantor pusat di Sant'Agata Bolognese, Italia. Perusahaan ini didirikan pada tahun 1963 oleh Ferruccio Lamborghini dan terkenal dengan mobil sport berperforma tinggi seperti Lamborghini Aventador, Lamborghini Huracán, dan Lamborghini Gallardo.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('img/partners/tokopedia.png')}}" class="testimonial-img" alt="">
                            <h3>Tokopedia</h3>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Tokopedia adalah perusahaan e-commerce terbesar di Indonesia yang didirikan pada tahun 2009 oleh William Tanuwijaya dan Leontinus Alpha Edison. Platform ini memungkinkan pengguna untuk membeli dan menjual berbagai produk, mulai dari fashion, elektronik, hingga produk makanan dan minuman.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('img/partners/shoope.png')}}" class="testimonial-img" alt="">
                            <h3>Shoope</h3>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Shopee adalah platform e-commerce dan pembayaran online terbesar di Asia Tenggara yang didirikan pada tahun 2015 oleh Forrest Li. Shopee menyediakan berbagai produk, seperti fashion, elektronik, kosmetik, dan produk kebutuhan sehari-hari dengan harga yang kompetitif.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Information</span>
                <h2>Information</h2>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    What are the advantages of LogiSwift?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    You can easily find out the shipping tariff, and check the nearest drop point (branch office) to your location through the application and website.
                                    The facilities trace & tracking system will make you easier to track your packages' location during the shipping process.
                                    LogiSwfit Drop points operate every day (including weekends, and National Holidays)
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    What kind of LogiSwift services?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Regular / EZ: shipping service throughout Indonesia with an estimated delivery time of 2-3 working days, depend on the delivery destination.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    How to send a package with insurance service?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    You can tell the LogiSwift drop point admin that you want to insure your shipment goods. Then, LogiSwift will calculate your package insurance costs with a calculation 0.2% from the price of the invoice.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    What if there is damage and loss of package when shipping?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    If you have made an insurance payment and completed all claim documents, then LogiSwift will make a claim payment accordancing with the value of the goods, with maximum Rp. 20.000.000,- (Twenty Million Rupiah)



                                    If you do not use shipping insurance, the claim will be paid 10 times of shipping rates, with maximum Rp. 1,000,000 - (One Million Rupiah).
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    how to calculate the package with volumetric formula?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    (Length x Width x Height) X 1 Kg / 7000
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->
@endsection
