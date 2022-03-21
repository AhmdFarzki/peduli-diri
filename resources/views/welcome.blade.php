<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Peduli Diri</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('front/assets/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo/logo.png') }}" height="50" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
              @if (Auth::user())
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="{{ route('dashboard') }}">Halo, {{ Auth::user()->name }}</a></li>
              @else
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="{{ route('login') }}">Login</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="{{ route('register') }}">Sign Up</a></li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
      <section style="padding-top: 7rem;">
        <div class="bg-holder" style="background-image:url({{ asset('front/assets/img/hero/hero-bg.svg') }});">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="{{ asset('front/assets/img/hero/hero-img.png')}}" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold text-warning mb-3">Aplikasi Pencatatan Perjalanan Online</h4>
              <h1 class="hero-title">Catat Perjalanan Kemanapun Kamu Pergi</h1>
              <p class="mb-4 fw-medium">Nikmati perjalananmu kemanapun.<br class="d-none d-xl-block" />Dan catat lokasi yang pernah Kamu kunjungi.</p>
              <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#info" role="button">Berangkat!</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section id="info">

            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="mb-4 text-start">
                    <h5 class="text-secondary">Mudah dan Cepat </h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Catat Perjalananmu Dalam 3 Langkah</h3>
                  </div>
                  <div class="d-flex align-items-start mb-5">
                    <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{ asset('front/assets/img/steps/user.svg') }}" width="22" alt="steps" /></div>
                    <div class="flex-1">
                      <h5 class="text-secondary fw-bold fs-0">Daftar Akun Baru</h5>
                      <p>Klik menu daftar dibagian atas <br class="d-none d-sm-block"> dan isi form yang ada.</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-start mb-5">
                    <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{ asset('front/assets/img/steps/write.svg') }}" width="22" alt="steps" /></div>
                    <div class="flex-1">
                      <h5 class="text-secondary fw-bold fs-0">Tulis Perjalananmu</h5>
                      <p>Tambahkan catatan perjalananmu <br class="d-none d-sm-block"> dengan mengisi form yang ada.</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-start mb-5">
                    <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{ asset('front/assets/img/steps/success.svg') }}" width="22" alt="steps" /></div>
                    <div class="flex-1">
                      <h5 class="text-secondary fw-bold fs-0">Catatan Perjalananmu Sudah Tersimpan</h5>
                      <p>Catatanmu sudah tersimpan <br class="d-none d-sm-block"> dan kamu bisa melihatnya kapan pun.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-start">
                  <div class="card position-relative shadow" style="">
                    <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img src="{{ asset('front/assets/img/steps/bg.png') }}" style="max-width:550px;" alt="shape" /></div>
                    <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="{{ asset('front/assets/img/hero/step.svg') }}" alt="booking" />
                      <div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end of .container-->
    
          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      {{-- <section class="pt-5 pt-md-9" id="service">

        <div class="container">
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="{{ asset('front/assets/img/category/shape.svg') }}" style="max-width: 200px" alt="service" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">Informasi </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Update Kasus Covid-19 Indonesia</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/covid-19.svg')}}" width="75" alt="Service" />
                    <p class="mb-3 mt-3 fw-medium">Jumlah Positif</p>
                  <h4 class="mb-0">{{ $covid['update']['total']['jumlah_positif'] }}</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/covid-19.svg')}}" width="75" alt="Service" />
                    <p class="mb-3 mt-3 fw-medium">Jumlah Dirawat</p>
                  <h4 class="mb-0">{{ $covid['update']['total']['jumlah_dirawat'] }}</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/covid-19.svg')}}" width="75" alt="Service" />
                    <p class="mb-3 mt-3 fw-medium">Jumlah Sembuh</p>
                  <h4 class="mb-0">{{ $covid['update']['total']['jumlah_sembuh'] }}</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/covid-19.svg')}}" width="75" alt="Service" />
                    <p class="mb-3 mt-3 fw-medium">Jumlah Meninggal</p>
                  <h4 class="mb-0">{{ $covid['update']['total']['jumlah_meninggal'] }}</h4>
                </div>
              </div>
            </div>
            <p>Sumber: <a href="https://covid19.go.id/">covid19.go.id</a></p>
          </div>
        </div><!-- end of .container-->

      </section> --}}
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="service">

          <div class="container">
            <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="{{ asset('front/assets/img/category/shape.svg') }}" style="max-width: 200px" alt="service" /></div>
            <div class="mb-7 text-center">
              <h5 class="text-secondary">Covid-19 </h5>
              <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Tetap Patuhi Protokol Kesehatan</h3>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6 mb-6">
                <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                  <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/mask.png') }}" width="75" alt="Service" />
                    <h4 class="mb-3 mt-3">Memakai Masker</h4>
                    <p class="mb-0 fw-medium">Selalu memakai masker kemanapun Kamu pergi.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-6">
                <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                  <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/distance.png') }}" width="75" alt="Service" />
                    <h4 class="mb-3 mt-3">Menjaga Jarak</h4>
                    <p class="mb-0 fw-medium">Jaga jarak minimal 1,5 meter dengan orang lain.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-6">
                <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                  <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/hand.png') }}" width="75" alt="Service" />
                    <h4 class="mb-3 mt-3">Mencuci Tangan</h4>
                    <p class="mb-0 fw-medium">Cuci selalu tangan Kamu dan gunakan Hand Sanitizer.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 mb-6">
                <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                  <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('front/assets/img/category/crowd.png') }}" width="75" alt="Service" />
                    <h4 class="mb-3 mt-3">Jauhi Kerumunan</h4>
                    <p class="mb-0 fw-medium">Hindari kerumunan dan hindari berkumpul dengan banyak orang.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-6">

        <div class="container">
          <div class="py-8 px-5 position-relative text-center" style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
            <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="{{ asset('front/assets/img/cta/send.png') }}" style="max-width:70px;" alt="send icon" /></div>
            <div class="position-absolute end-0 top-0 z-index--1"> <img src="{{ asset('front/assets/img/cta/shape-bg2.png') }}" width="264" alt="cta shape" /></div>
            <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img src="{{ asset('front/assets/img/cta/shape-bg1.png') }}" style="max-width: 340px;" alt="cta shape" /></div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7">"Remember that happiness is a way of travel, not a destination." - Roy Goodman.</h2>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium">© 2022 All rights reserved By <a href="https://madfariz.my.id/">Ahmad Alfarizki</a> </p>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('front/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('front/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('front/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>

</html>