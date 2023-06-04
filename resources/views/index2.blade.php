<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inpeban</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/daadaa4139.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

</head>


<body>

  <nav class="navbar container-fluid   fixed-top">
    <div class="container-fluid">
      <img class = "logo1" src="assets/images/logo.png" alt="logo">
      <h1>Pengaduan Masyarakat</h1>
      <div class="iconv ">
        <h5>
          <i class='fas fa-sign-out-alt ' style='font-size:30px'></i>
        </h5>
      </div>
      </div>
    </div>
  </nav>

  <div class="row no-gutters" id="row">
    <div class="col-md-2" >
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="index2"><i class='fas fa-tachometer-alt' style='font-size:30px'></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="masuk"><i class='fas fa-download' style='font-size:30px'></i>Laporan masuk</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="proses"><i class='fas fa-sync-alt' style='font-size:30px'></i>Laporan diproses</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="selesai"><i class='fas fa-folder' style='font-size:30px'></i>Laporan selesai</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ditolak"><i class='far fa-window-close' style='font-size:30px'></i>Laporan ditolak</a><hr class="bg-secondary">
      </li>
    </ul>
  </div>
    <div class="col-md-10">
      <h3>DASHBOARD</h3><hr>
      <div class="row" id="row">
        <div class="card custom-card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Laporan Masuk</h5>
            <div class="display-5">200</div>
          </div>
        </div>
        <div class="card custom-card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Laporan Diproses</h5>
          </div>
        </div>
        <div class="card custom-card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Laporan Selesai</h5>
          </div>
        </div>
        <div class="card custom-card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Laporan Ditolak</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('js/index2.js')}}"></script>
</body>
<footer>
  <p>Inpeban@Copyright2023</p>
</footer>
</html>