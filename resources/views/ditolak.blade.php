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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{asset('assets/css/main2.css')}}">

</head>


<body>

  <nav class="navbar container-fluid navbar-light  fixed-top">
    <div class="container-fluid">
      <img class = "logo" src="assets/images/logo.png" alt="logo">
      <h1>Pengaduan Masyarakat</h1>
      <div class="iconv ">
        <h5>
          <i class='fas fa-sign-out-alt ' style='font-size:36px'></i>
        </h5>

      </div>
      </div>

    </div>
  </nav>

  <div class="row no-gutters ">
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
      <h3>Laporan Ditolak</h3><hr>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Topik</th>
            <th scope="col">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Nurun</td>
            <td>082112432354</td>
            <td>nurunnana</td>
            <td>22-05-2023</td>
            <td>Lelah Bestie</td>
            <td>Capek dikejar DL</td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Nafisah</td>
            <td>082112432354</td>
            <td>nurunnana</td>
            <td>22-05-2023</td>
            <td>Lelah Bestie</td>
            <td>Capek dikejar DL</td>

          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Nana</td>
            <td>082112432354</td>
            <td>nurunnana</td>
            <td>22-05-2023</td>
            <td>Lelah Bestie</td>
            <td>Capek dikejar DL</td>

          </tr>
        </tbody>
      </table>

    </div>
  </div>
</body>
<footer>
  <p>Inpeban@Copyright2023</p>
</footer>
</html>