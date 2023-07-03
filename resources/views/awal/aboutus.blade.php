@extends('layouts.app2')

@section('title', 'General Dashboard')

@section('main')
<div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-blocks-cover inner-page" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <span class="sub-text">Know Us</span>
            <h1><strong>About</strong> Us</h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section section-about">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="site-heading text-black mb-5">A Team of <strong>Dedicated Baby</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 pl-md-5 text-center">
            <div>
              <img src="images/person_1.jpg" alt="Image" class="w-50 mb-5 rounded-circle" hidden>
              <h3 hidden>Varo</h3>
            </div>
          </div>
          <div class="col-lg-3 pl-md-5 text-center">
            <div>
              <img src="images/v.jpg" alt="Image" class="w-50 mb-5 rounded-circle">
              <h3>Varo</h3>
            </div>
          </div>
          <div class="col-lg-3 pl-md-5 text-center">
            <div>
              <img src="images/f.jpg" alt="Image" class="w-50 mb-5 rounded-circle">
              <h3>Farhan</h3>
            </div>
          </div>
          <div class="col-lg-3 pl-md-5 text-center">
            <div>
              <img src="images/i.jpg" alt="Image" class="w-50 mb-5 rounded-circle" hidden>
              <h3 hidden>Ilham</h3>
            </div>
          </div>
          <div class="row mb-5 justify-content-center">
          <div class="col-lg-3 pl-md-5 text-center">
            <div>
              <img src="images/i.jpg" alt="Image" class="w-50 mb-5 rounded-circle">
              <h3>Ilham</h3>
            </div>
          </div>
          <div class="col-lg-3 pl-md-5 text-center">
            <div>
              <img src="images/b.jpg" alt="Image" class="w-50 mb-5 rounded-circle">
              <h3>Bagas</h3>
            </div>
          </div>
          <div class="col-lg-3 pl-md-5 text-center">
            <div>
              <img src="images/p.jpg" alt="Image" class="w-50 mb-5 rounded-circle">
              <h3>Valen</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="site-heading text-black mb-5">Our <strong>Services</strong></h2>
          </div>
        </div>
        <div class="row">

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-tooth font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Imunisasi</h3>
                <p>Imunisasi penting diberikan pada bayi segera setelah ia lahir ke dunia. Imunisasi sendiri adalah cara untuk memperkuat kekebalan tubuh bayi dengan cara memasukkan vaksin, yakni virus atau bakteri yang sudah mati atau dilemahkan.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-dentist-chair font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Timbang</h3>
                <p>Penimbangan bayi dan balita setiap bulan juga dimaksudkan untuk dapat memantau tumbuh kembang bayi dan balita sehingga dapat dideteksi sedini mungkin masalah kesehatan yang dimiliki seorang bayi dan balita.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-tooth-pliers font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Perkembangan Bayi</h3>
                <p>Kehadiran buah hati di tengah-tengah keluarga tentu membawa kebahagiaan bagi pasangan yang mengidamkan keluarga kecil yang bahagia. Pertumbuhan bayi sejak di dalam kandungan hingga lahir ke dunia pun akan memberikan rasa takjub.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

@endsection