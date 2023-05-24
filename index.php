<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TELKOM LSM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <meta name="theme-color" content="#712cf9">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(120, 186, 231, 0.597);
      border: solid rgb(8, 69, 95);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(24, 90, 148, 0.568), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  <link href="headers.css" rel="stylesheet">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
  </svg>

  <header class="p-3 text-bg-danger">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-anchor">
          <img src="img/Icon.jpg" class="bd-placeholder-img" alt="Gambar logo" width="70%" height="70%">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
          <li><a href="berita.php" class="nav-link text-white">Berita</a></li>
          <li><a href="about.php" class="nav-link text-white">About</a></li>
          <li><a href="kontak.php" class="nav-link text-white">Kontak</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-anchor" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-dark me-2"><a href="login.php">Login</a></button>
          <button type="button" class="btn btn-outline-dark"><a href="sign.php">Sign-up</a></button>
        </div>
      </div>
    </div>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/IMG4.jpg" class="bd-placeholder-img" alt="Gambar Carousel" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption">
              <h1>E-OBSERVE</h1>
              <p>Pantau Perkembangan Anda</p>
              <p><a class="btn btn-lg btn-danger" href="#">Login Now</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/IMG1.jpg" class="bd-placeholder-img" alt="Gambar Carousel" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption">
              <h4>SELAMAT DATANG</h4>
              <h1>SCHEDULE T.KOM</h1>
              <p><a class="btn btn-lg btn-danger" href="#">Pelajari Selengkapnya</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/IMG2.jpg" class="bd-placeholder-img" alt="Gambar Carousel" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption">
              <h1>NEWS</h1>
              <p>Kami yakin, logo dan slogan baru ini akan mempersatukan tekad, semangat, jiwa, cipta, rasa dan karsa seluruh insan di Badan Usaha Milik Negara untuk memberikan kontribusi terbaiknya Untuk Indonesia.</p>
              <p><a class="btn btn-lg btn-danger" href="#">Pelajari Selengkapnya</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">INFORMASI <span class="text-muted"></span></h2>
          <p class="lead">PT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia.</p>
          <p><a class="btn btn-outline-danger" href="informasi.php">Lihat Selengkapnya &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <br><br><br>
          <img src="img/IMG1.jpg" class="img-circle" alt="Gambar informasi" width="400" height="250">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">MITRA</h2>
          <p class="lead">Bagi Telkom, Program Kemitraan dan Bina Lingkungan (PKBL) bukanlah sekedar menjalankan kewajiban sebagai salah satu BUMN, tetapi merupakan upaya untuk mengelola dampak dari kebijakan dan kegiatan operasional terhadap masyarakat dan lingkungan alam secara transparan dan beretika. Penerapan PKBL Telkom juga sejalan dengan konsep 3P (profit, people, planet) yang bersinergi dengan Program Tanggung Jawab Sosial Perusahaan Telkom (TJSL Telkom).</p>
          <p><a class="btn btn-outline-danger" href="antrian.php">Lihat Selengkapnya &raquo;</a></p>
        </div>
        <div class="col-md-5 order-md-1">
          <br><br><br>
          <img src="img/IMG2.jpg" class="img-circle" alt="Gambar antrian" width="400" height="250">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">CLIENT</h2>
          <p class="lead">Dalam upaya bertransformasi menjadi digital telecommunication company, TelkomGroup mengimplementasikan strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (customer-oriented). Transformasi tersebut akan membuat organisasi TelkomGroup menjadi lebih lean (ramping) dan agile (lincah) dalam beradaptasi dengan perubahan industri telekomunikasi yang berlangsung sangat cepat. Organisasi yang baru juga diharapkan dapat meningkatkan efisiensi dan efektivitas dalam menciptakan customer experience yang berkualitas.</p>
          <p><a class="btn btn-outline-danger" href="kabar_data.php">Lihat Selengkapnya &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <br><br><br>
          <img src="img/IMG3.jpg" class="img-circle" alt="Gambar kabar data" width="400" height="250">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2023 Deby Zamzam Firdaus, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>