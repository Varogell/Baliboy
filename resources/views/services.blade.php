@extends('layouts.main')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url({{asset('img/page-header.jpg')}});">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Services</h2>
                    <p>Miracle Baby</p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="/home">Home</a></li>
                <li>Services</li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->
<section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <span>Our Services</span>
            <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{asset('img/storage-service.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="" class="stretched-link">Storage</a></h3>
                    <p>Penyimpanan pada Gudang kami sangatlah aman dan besar jika menampung banyak transaksi atau paket yang ada.</p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">u
                    <div class="card-img">
                        <img src="{{asset('img/logistics-service.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="" class="stretched-link">Logistics</a></h3>
                    <p>Logistik yang ada pada kami, sangatlah aman dan lengkap. yang menyangkut  aktivitas seperti pengadaan, manajemen persediaan, pengangkutan, penyimpanan, dan distribusi.</p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="card-img">
                        <img src="{{('img/cargo-service.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="" class="stretched-link">Cargo</a></h3>
                    <p>Kami memiliki Banyak cargo baru unutk mengangkut paket yang ingin anda kirim dan pastinnya aman sampai tujuan.</p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <div class="card-img">
                        <img src="{{asset('img/trucking-service.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="" class="stretched-link">Trucking</a></h3>
                    <p>Kami juga memiliki banyak Truck pengirim paket yang nantinya akan dikirim ke tiap gerai yang ada.</p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card">
                    <div class="card-img">
                        <img src="{{asset('img/packaging-service.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="" class="stretched-link">Packaging</a></h3>
                    <p>Kami juga menawarkan Packaging untuk paket anda yang nantinya pelanggan bisa request paket akan di bungkus dengan apa. </p>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card">
                    <div class="card-img">
                        <img src="{{asset('img/warehousing-service.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <h3><a href="" class="stretched-link">Warehousing</a></h3>
                    <p>Kami memiliki banyak tempat penyimpanan disetiap kota dan memiliki sesitem manajemen persiediaan yang canggih untuk melacak paket anda </p>
                </div>
            </div><!-- End Card Item -->

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

            <div class="col-md-5">
                <img src="{{asset('img/features-1.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
                <h3>Penyerahan Paket pada kurir atau Gerai</h3>
                <p class="fst-italic">
                   Jika Anda menyerahkan paket pada kuris atau Gerai maka kami pastikan paket anda akan kami kirim sesuai denga alamat yang dituju.
                </p>
{{--                <ul>--}}
{{--                    <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                    <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                    <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>--}}
{{--                </ul>--}}
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="{{asset('img/track.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>Pelacakan Paket & Update</h3>
                <p class="fst-italic">
                    Tracking paket & update
                </p>
                <p>
                    Anda tidak perlu khwatir paket anda ada dimana, karena anda dapat melacak paket kapan dan dimanapun melalui website resmi kami, setiap update akan tertera diasana.
                </p>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5">
                <img src="{{asset('img/features-3.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
                <h3>Paket akan Dikirim Oleh Kurir Kami</h3>
                <p>Apabila paket telah sampai dikota anda, maka kurir akan mengantarnya kerumah anda, tanpa anda datang ke gerai. Perlu diingat sebelum anda menerima paket perhatikan hal dibawah ini :</p>
                <ul>
                    <li><i class="bi bi-check"></i>Pastikan paket benar</li>
                    <li><i class="bi bi-check"></i>Pastikan paket tidak rusak</li>
                    <li><i class="bi bi-check"></i>Pastikan membuat video unboxing jika ingin klaim garansi</li>
                </ul>
            </div>
        </div><!-- Features Item -->

{{--        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">--}}
{{--            <div class="col-md-5 order-1 order-md-2">--}}
{{--                <img src="{{asset('img/features-4.jpg')}}" class="img-fluid" alt="">--}}
{{--            </div>--}}
{{--            <div class="col-md-7 order-2 order-md-1">--}}
{{--                <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>--}}
{{--                <p class="fst-italic">--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                    magna aliqua.--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in--}}
{{--                    culpa qui officia deserunt mollit anim id est laborum--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div><!-- Features Item -->--}}

    </div>
</section><!-- End Features Section -->


@endsection
