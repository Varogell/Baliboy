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

    <div class="site-blocks-cover inner-page" style="background-image: url(images/wdk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <span class="sub-text">Get In Touch</span>
            <h1><strong>Contact</strong> Us</h1>
          </div>
        </div>
      </div>
    </div>  

    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 mb-5 mb-lg-0">
          
            <h2 class="site-heading text-black mb-5"><strong>Appointment</strong></h2>
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Alamat</label><br>
                    <div class="text">
                      <p>Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>
                    </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Telepon</label><br>
                  <p>081237427978</p>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Email</label><br>
                  <p>miracle@babycare.com</p>
                </div>
              </div>
              <!-- <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Linked In</label><br>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div> -->
  
            </form>
          </div>
          <div class="col-md-12 col-lg-6">
          
            <h2 class="site-heading text-black mb-5">Say  <strong>Hello</strong></h2>
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Facebook</label><br>
                  <a href="https://www.facebook.com/" class="pl-3 pr-3"><span class="icon-facebook"></span></a>Miracle Babycare
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Twitter</label><br>
                  <a href="https://www.twitter.com/" class="pl-3 pr-3"><span class="icon-twitter"></span></a>@miraclebabycare
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Instagram</label><br>
                  <a href="https://www.instagram.com/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>@miraclebabycare
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Linked In</label><br>
                  <a href="https://www.linkedin.com/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>Miracle Babycare
                </div>
              </div>
  
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection