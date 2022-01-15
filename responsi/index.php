<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>SD 1 Gadingharjo</title>
  <link rel="shortcut icon" href="D:\xampp\htdocs\Test_1\SD GADINGHARJO.png" type="png/x-icon">
</head>

<body class="overflow-e-hidden">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #3282B8;">
    <div class="container px-3">
      <a class="navbar-brand text-white" href="login.html" id="masok">LoginLogin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#2">Visi Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="data.php">Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="services.php">Services</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- <?php

  echo $_SESSION['username'];

  ?> -->

  <header class="height-full justify-content-center bg-sm-dark" style="height: 100vh; background-image: url('section_1.jpeg'); background-repeat: no-repeat; background-size: cover;" id="000">
    <div style="background: rgba(0,0,0,.3); height: 100vh;">
      <div class="container py-5 px-5 align-items-center">
        <div class="row align-items-center justify-content-center gap-5 " style="height: 100vh;">

          <div class="col-sm-6">
            <h1 class="text-white"><b>SD 1 Gadingharjo</b></h1>
            <p class="text-white">Merten, Gadingharjo, Sanden, Bantul, Yogyakarta</p>
            <p class="text-light">
              Adalah sebuah instansi dalam naungan dinas pendidikan yang bersedia mengorbankan segalanya untuk mendidik anak-anak agar mendapatkan ilmu yang bermanfaat.
            </p>
            <button class="btn btn-primary me-3 btn-lg">Get Started</button>
            <button type="button" class="btn btn-outline-light btn-lg">Learn More</button>
          </div>
          <div class="col-sm-5 d-none d-sm-block align-items-center">
            <img src="SD GADINGHARJO.png" style="width: 100%; height: 400%" class="rounded-circle shadow-lg">
          </div>
        </div>
      </div>
  </header>
  </div>


  <section class="py-5 shadow-lg" id="2">
    <div class="container px-5 justify-content-center">

      <div class="row justify-content-center">
        <div class="col-sm-6 text-center">
          <h2>Visi Misi</h1>
            <p>Unggul dalam prestasi, berkarakter, berbudaya, peduli lingkungan, berwawasan global yang dilandasi iman dan takwa</p>
        </div>
      </div>

      <div>
        <div class="row row-cols-1 row-cols-md-3 g-5">
          <div class="col">
            <div class="card border-light shadow-lg">
              <img src="visi2.jpg" class="card-img-top" alt="...">
              <div class="card-body p-4">
                <h5 class="card-title">Persatuan</h5>
                <p class="card-text">Bersatu kita teguh bercerai kita berantakan.</p>
              </div>
              <div class="card-footer border-top-0 bg-transparent">
                <h5 class="text-center">by KepSek</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-light shadow-lg">
              <img src="visi4.jpg" class="card-img-top" alt="...">
              <div class="card-body p-4">
                <h5 class="card-title">Pilih-memilih</h5>
                <p class="card-text">Kita harus memilih masa depan kita.</p>
              </div>
              <div class="card-footer border-top-0 bg-transparent">
                <h5 class="text-center">by KepSek</h5>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-light shadow-lg">
              <img src="visi3.jpg" class="card-img-top" alt="...">
              <div class="card-body p-4">
                <h5 class="card-title">Domination</h5>
                <p class="card-text">lulusan kami menguasai dunia.</p>
              </div>
              <div class="card-footer border-top-0 bg-transparent">
                <h5 class="text-center">by KepSek</h5>
              </div>
            </div>
          </div>

        </div>

        <div class="row text-sm-start text-center justify-content-md-between bg-info mx-0 mt-5 p-2 rounded-3 gap-3">
          <div class="col-sm-5 text-white">
            <h3>
              Segera Hubungi Kami
            </h3>
          </div>

          <div class="col-sm-4 justify-content-center d-flex">
            <a href="tel:08999" class="btn btn-danger px-5 py-3">0889999</a>
          </div>
        </div>
      </div>
  </section>

  <footer class="bg-dark">
    <div class="container d-flex justify-content-between py-3">
      <div class="text-white">Copyright &copy Your Website 2021</div>
      <div class="text-white text-end">kyaa</div>
    </div>
  </footer>
</body>

</html>

<?php


if ($_SESSION['START'] == false && !isset($_SESSION['START'])) {
  echo "
    <script>
    document.querySelector('#masok').textContent = 'LOGIN';
    </script>
    ";
} else if ($_SESSION['START'] == true) {
  echo "
    <script>
    document.querySelector('#masok').textContent = 'LOGOUT';
    </script>
    ";
}

?>

<script type="text/javascript">
  if (document.querySelector('#masok').containts = "LOGOUT") {
    document.querySelector('#masok').setAttribute('href', 'logout.php')
  } else {
    document.querySelector('#masok').setAttribute('href', 'login.html')
  }
</script>