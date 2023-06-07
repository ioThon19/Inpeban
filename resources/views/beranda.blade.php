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

    
</head>


<body>

  <nav class="navbar3">
    <img class="logo" src="/assets/images/logo.png" alt="logo">
    <ul class="nav-links">
      <li><a href="">Beranda</a></li>
      <li><a href="#rekomendasi">Rekomendasi</a></li>
      <li><a href="#galery">Galeri</a></li>
      <li><a href="#services">Layanan</a></li>
      <li><a href="#about">Tentang Kami</a></li>
      <li class="ctn"><a href="login">Masuk</a></li>
    </ul>
    <img src="assets/images/button.png" alt="" class="menu-btn">
  </nav>

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
        <h5>Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif
          Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah
          1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut
          sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam
          namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan
          penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).
        </h5>
      </div>
      <div class="col-md-6">
        <div class="image">
          <img src="assets/images/tuban.png" alt="tuban" class="img-fluid">
        </div>
      </div>
    </div>
  </div>


  <div id="rekomendasi">
    <h1>Rekomendasi</h1>
      <div class="card">
        <div class="row">
          <?php foreach ($data2 as $row) {
            # code...
          ?>
          <div class="col">
            <div class="cardd1">
              <img src="<?php echo $row['image'] ?>" alt="card">
              <div class="deskripsi">
                <p><a href="detail?id=<?php echo $row['id'];?>"><?php echo $row['name'] ?></a></p>
                <p>⭐ <?php echo $row['rating'] ?></p>
                <p><?php echo $row['category'] ?></p>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
  </div>



  <div id="galery">
    <h1>Galeri</h1>
      <div class="card">
        <div class="row">
          <?php foreach ($data1 as $row) {
            # code...
          ?>
          <div class="col">
            <div class="cardd2">
              <img src="<?php echo $row['image'] ?>" alt="card">
              <div class="deskripsi">
                <p><?php echo $row['name'] ?></p>
              </div>
            </div>
          </div>
          <?php }?>

        </div>
      </div>
  </div>

  <article>

  <div id="services">
    <h1>Layanan Kami</h1>
    <p>Layanan INPEBAN dirancang untuk menjadi platform yang inklusif dan mudah digunakan oleh semua lapisan masyarakat.Melalui situs web resmi INPEBAN, masyarakat Tuban dapat mengirimkan aduan mereka dengan menyertakan detail lengkap tentang keluhan atau masalah yang dihadapi pada daerahnya. Tim yang ditugaskan di INPEBAN akan memproses aduan yang masuk dengan cepat dan bertanggung jawab. Mereka akan melakukan verifikasi, mengklasifikasikan, dan menyampaikan aduan kepada pihak yang berwenang untuk ditindaklanjuti. </p>
    <div class="form">
      <h2 class="text-center">Formulir Layanan</h2>
      <form>
        <div class="form-group row">
          <label for="staticName" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="staticName" placeholder="Nama">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPhone" class="col-sm-2 col-form-label">No.Telepon</label>
          <div class="col-sm-10">
            <input type="phone" class="form-control" id="inputPhone" placeholder="No.Telepon">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="inputDate" placeholder="Date">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputTopic" class="col-sm-2 col-form-label">Topik</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputTopic" placeholder="Topik">
          </div>
        </div>
        <div class="form-group row">
          <label for="formGroupDescription" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="formGroupDescription" placeholder="Ketik di sini..." style="height: 100px;"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-3 offset-sm-9">
            <button type="button" class="btn btn-custom btn-lg form-control">Submit</button>
          </div>
        </div>
      </form>
    </div>
    
    </div>
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
          <li><a href="#home">Beranda</a></li>
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