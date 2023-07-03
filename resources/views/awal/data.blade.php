@extends('layouts.app2')

@section('title', 'Data')

@section('main')
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-blocks-cover" style="background-image: url(images/cpg2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <span class="sub-text">We Priority Your</span>
            <h1>Your <strong>BABY SMILE</strong></h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-block-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-tooth font-weight-light text-white h2"></span>
              </div>
              <div class="text">
                <h3>Imunisasi <br>Bayi</h3>
              </div>
            </div>   
          </div>
          <div class="col-lg-4">
            <div class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-dentist-chair font-weight-light text-white h2"></span>
              </div>
              <div class="text">
                <h3>Penimbangan Bayi</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-tooth-pliers font-weight-light text-white h2"></span>
              </div>
              <div class="text">
                <h3>Perkembangan Bayi</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="site-section site-block-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-6">
            <div class="row row-items">
              <div class="col-md-6">
                <a href="#" class="d-flex text-center feature active p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-tooth-whitening display-3"></span>
                    </span>
                    <h3>Tooth Whitening</h3>
                  </span>
                </a>
              </div>
              <div class="col-md-6">
                <a href="#" class="d-flex text-center feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-stethoscope display-3"></span>
                    </span>
                    <h3>Stethoscope</h3>
                  </span>
                </a>
              </div>
            </div>
            <div class="row row-items last">
              <div class="col-md-6">
                <a href="#" class="d-flex text-center feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-first-aid-kit display-3"></span>
                    </span>
                    <h3>First Aid Kit</h3>
                  </span>
                </a>
              </div>
              <div class="col-md-6">
                <a href="#" class="d-flex text-center active feature p-4 mb-4">
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-tooth-pliers display-3"></span>
                    </span>
                    <h3>Tooth Pliers</h3>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    

    <!-- <div class="site-section site-block-appointment">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 pl-lg-5 order-1 order-lg-2">
            <div class="pl-lg-5 ml-lg-5">
              <h2 class="site-heading text-black">Online <strong>Appointment</strong> Request Form</h2>
              <p class="lead text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum vitae possimus sapiente temporibus, cum error.</p>
              <p class="text-black-opacity-5">Temporibus adipisci modi nisi, in deserunt. Nam, veritatis pariatur fugit explicabo? Nemo eius, eaque saepe facilis quidem nisi. Officiis doloremque dolorum optio.</p>
            </div>
          </div>
          <div class="col-lg-6 order-2 order-lg-1">


            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <label class="font-weight-bold" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control" placeholder="Last Name">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="date">Date</label> 
                  <input type="text" id="date" class="form-control datepicker px-2" placeholder="Date of visit">
                </div>
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="treatment">Treatment Needed</label> 
                  <select name="treatment" id="treatment" class="form-control">
                    <option value="">Dental exam and teeth cleaning</option>
                    <option value="">Dental emergency</option>
                    <option value="">Dental implants</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="note">Notes</label> 
                  <textarea name="note" id="note" cols="30" rows="5" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <div class="promo py-5 bg-primary">
      <div class="container text-center">
        <span class="d-block h4 mb-3 font-weight-light text-white">Promo For Tooth Cleaning from <del>$140.00</del> now <strong class="font-weight-bold">$50.00</strong></span>
        <div id="date-countdown" class="mt-0"></div>
      </div>
    </div> -->

    
    <!-- <div class="site-section bg-light">
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

    <div class="site-block-half d-block d-lg-flex site-block-video">
      <div class="image bg-image order-2" style="background-image: url(images/cpg.jpg); ">
      </div>
      <div class="text order-1">
        <h2 class="site-heading text-black mb-3">Ini Ci<strong>FUNK !</strong></h2>
        <p class="lead">Cipung merupakan brand ambasador kami. Cipung sudah bersama kami sejak lahir.</p>
        <p>Silahkan Poppy Mommy yang anaknya mau seperti cipung bisa tanya ke raffi dan nagita, hehe. Kalau gak sanggup bisa tanya tanya dulu ke kami. Kami siap melayani poppy mommy untuk berkonsultasi. Kami juga nenyediakan layanan untuk imunisasi dan penimbangan bayi mommy poppy. Kami juga akan memberikan perkembangan kepada mommy poppy.</p>
      </div>
      
    </div> -->

    @auth
    
    <div class="site-section bg-light">
        
        <div class="container">
        
            <div class="card-body">
            <form class="row mb-3 mt-5" action="{{ route('cari') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <div class="d-flex flex-row">
            <input type="text" value="{{ (request()->cari) ? request()->cari : '' }}" name="cari" class="form-control" placeholder="cari anak">
            <button type="submit" class="btn btn-primary ml-4">Cari</button>
        </div>
    </div>
</form>
                <div class="table-responsive">
                    
                        <table class="table-bordered table-md table">
                                        <tr>
                                            <th>No</th>
                                            <th>ID anak</th>
                                            <th>Akte</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Nama Ibu</th>
                                            <th>Nama Ayah</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($anak as $k)
                                            <tr>
                                                <td>{{ $i++}}</td>
                                                <td>{{ $k->id_anak}}</td>
                                                <td><img src="{{asset('file_upload')}}/{{$k->akte}}" style ="max-width: 90px"></td>
                                                <td>{{ $k->nama}}</td>
                                                <td>{{ $k->TTL}}</td>
                                                <td>{{ $k->nama_ibu}}</td>
                                                <td>{{ $k->nama_ayah}}</td>
                                                <td>{{ $k->alamat}}</td>
                                                <td>{{ $k->telepon}}</td>
                                                <td>
                                                    <a class="btn btn-info" href="{{ route('show',$k->id_anak) }}">Show</a>

                                                </td>
                                            </tr>
                                        @endforeach
                            </table>
                </div>
            </div>
        </div>
    </div>
    @endauth
@endsection