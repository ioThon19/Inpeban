<?php

$sumber1 = 'https://my-json-server.typicode.com/Biella20/Inpeban/gallery';
$konten1 = file_get_contents($sumber1);
$data1 = json_decode($konten1, true);
//var_dump($data);

$sumber2 = 'https://my-json-server.typicode.com/Biella20/Inpeban/recomendation';
$konten2 = file_get_contents($sumber2);
$data2 = json_decode($konten2, true);
?>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('android-chrome-512x512.png')}}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('android-chrome-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('apple-touch-icon.png')}}">
  <link rel="manifest" href="{{asset('site.webmanifest')}}">
  <meta name="theme-color" content="#ffffff">
  <meta name="description"
  content="Informasi untuk daya tarik wisata dan layanan aduan masyarakat.">


</head>


<body>

  <nav class="navbar3">
    <img class="logo" src="/assets/images/logo.png" alt="logo">
    <ul class="nav-links">
      <li><a href="#beranda">Beranda</a></li>
      <li><a href="#rekomendasi">Rekomendasi</a></li>
      <li><a href="#galery">Galeri</a></li>
      <li><a href="#services">Layanan</a></li>
      <li><a href="#about">Tentang Kami</a></li>
      <li class="ctn"><a href="{{ route('inpeban.index') }}">Masuk</a></li>
    </ul>
    <img src="assets/images/burger.svg" alt="" class="menu-btn">
  </nav>

  <div id="beranda">
    <header>
      <div class="header-content">
        <h1>SELAMAT DATANG DI INPEBAN</h1>
        <div class="line"></div>
        <p>INPEBAN atau Informasi Pelayanan Tuban merupakan sebuah sistem informasi kabupaten Tuban yang menyajikan informasi dan potensi serta sebagai platfrom pelayanan publik untuk memberikan wadah kepada masyarakat Tuban dalam menyampaikan keluhan atau masalah yang terjadi di desanya.
        </p>
      </div>
    </header>
  
    <div class="kotak tuban">
      <div class="row">
        <div class="col-md-6">
          <h1>Kabupaten Tuban</h1>
          <h5>Kabupaten Tuban merupakan bagian dari Provinsi Jawa Timur. Kabupaten Tuban dengan City Branding Tuban Bumi Wali The Spirit of Harmony ini 
            adalah kota bersejarah, juga merupakan pintu gerbang Provinsi Jawa Timur dari arah Provinsi Jawa Tengah. Selain itu, berada di lintasan 
            Jaur Pantura Pulau Jawa, terletak di Ujung Paling Barat Provinsi Jawa Timur. Posisi Astronomi berada di titik Koordinat antara 6,40' - 7,14' 
            Lintang Selatan (LS) serta antara 111,30' - 112,35 Bujur Timur (BT). Luas Wilayah daratan 1.839,94 km2, luas wilayah lautan 22.608 km2. 
            Panjang Pantai diperkirakan 65 km. Di sebelah Utara Kabupaten Tuban terbentang Laut Jawa, sebelah selatan mengalir air Sungai Bengawan Solo, 
            sebelah barat mengalir Sungai Sarang dan tepian timur mengalir Sungai Lohgung. Pada bagian tengah Kabupaten Tuban, diantara pesisir Laut Jawa 
            dan Sungai Bengawan Solo, terhampar Pegunungan Kapur Utara. Secara geologis Kabupaten Tuban berada dalam cekungan Wilayah Jawa Timur Bagian Utara, 
            memanjang dari arah barat ke timur mulai dari Semarang sampai Surabaya. Sebagian besar wilayah Kabupaten Tuban dalam Zona Rembang, didominasi endapan 
            batuan Karbonat. Zona Rembang didominasi Perbukitan Kapur.
          </h5>
        </div>
        <div class="col-md-6">
          <div class="image">
            <img src="assets/images/tuban.png" alt="tuban" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div id = "rekomendasi">
    <h1>Rekomendasi</h1>
    <div class="grid">  
      <?php foreach ($data2 as $row) { ?>  
        <div class="cardd3">
          <img src="<?php echo $row['image'] ?>" alt="card">
          <div class="deskripsi">
            <p>⭐<?php echo $row['rating'] ?></p>
            <p><a href="detail?id=<?php echo $row['id']; ?>"><?php echo $row['name'] ?></a></p>
            {{-- <p><?php echo $row['category'] ?></p> --}}
          </div>   
        </div>
      <?php } ?>
    </div>
  </div>

  <div id = "galery">
    <h1>Galeri</h1>
    <div class="grid">  
    <?php foreach ($data1 as $row) { ?>  
        <div class="cardd4">
        <img src="<?php echo $row['image'] ?>" alt="card">
            <div class="deskripsi">
              <p><?php echo $row['name'] ?></p>
            </div>
        </div>
      <?php } ?>
    </div>
  </div>


  <article>
  <div id="services">
    <h1>Layanan Kami</h1>
    <p>Layanan INPEBAN dirancang untuk menjadi platform yang inklusif dan mudah digunakan oleh semua lapisan masyarakat.Melalui situs web resmi INPEBAN, masyarakat Tuban dapat mengirimkan aduan mereka dengan menyertakan detail lengkap tentang keluhan atau masalah yang dihadapi pada daerahnya. Tim yang ditugaskan di INPEBAN akan memproses aduan yang masuk dengan cepat dan bertanggung jawab. Mereka akan melakukan verifikasi, mengklasifikasikan, dan menyampaikan aduan kepada pihak yang berwenang untuk ditindaklanjuti. </p>
    <a href="{{ route('inpeban.index') }}"><button type="submit" class="btn btn-purple text-white mt-3" style="background: #6b9080; color: #fff; float: right;">Buat Laporan</button></a>
    </div>
</article>


  <div id="about">
    <h1>Tentang Kami</h1>
    <div class="card">
      <div class="row">
        <div class="col">
          <img src="assets/images/anthon.png" alt="profil" class="profil">
          <h4>Anthonio Akbar</h4>
          <p>Pengembang Backend & Desainer UI/UX</p>
          <p>Universitas Pendidikan Indonesia</p>
        </div>
        <div class="col">
          <img src="assets/images/nurunnaf.jpg" alt="profil" class="profil">
          <h4>Nurun Nafisah</h4>
          <p>Pengembang Frontend & Desainer UI/UX</p>
          <p>Universitas Negeri Surabaya</p>
        </div>
        <div class="col">
          <img src="assets/images/lidya.jpeg" alt="profil" class="profil">
          <h4>Lidya Gabriella Tarigan</h4>
          <p>Pengembang Backend & Desainer UI/UX</p>
          <p>Universitas Sumatra Utara</p>
        </div>
        <div class="col">
          <img src="assets/images/rossy.jpg" alt="profil" class="profil">
          <h4>Nur Rosydatun Nafiah</h4>
          <p>Pengembang Frontend & Desainer UI/UX</p>
          <p>UPN "Veteran" Yogyakarta</p>
        </div>
      </div>
    </div>
  </div>

  <div class="logo1">
    <img src="assets/images/logo1.png" alt="logo1">
    <div class="navbar2">
      <nav class="nav2">
        <ul>
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="#rekomendasi">Rekomendasi</a></li>
          <li><a href="#galery">Galeri</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#about">Tentang Kami</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <script>
    const menuBtn = document.querySelector(".menu-btn")
    const navlinks = document.querySelector(".nav-links")
    menuBtn.addEventListener('click', () => {
      navlinks.classList.toggle('mobile-menu')
    })

  </script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  {{-- <script src="{{asset('assets/js/index.js')}}"></script>
  <script src="{{ asset('/') }}assets/js/index.js"></script> --}}

  <footer>
    <p style="color: #F6FFF8;">Inpeban@Copyright2023</p>
  </footer>
</body>

</html>
