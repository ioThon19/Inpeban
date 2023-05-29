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
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

</head>


<body>

  <nav class="navbar">
    <img class = "logo" src="assets/images/logo.png" alt="logo">
    <ul class="nav-links">
      <li><a href="">Beranda</a></li>
      <li><a href="#rekomendasi">Rekomendasi</a></li>
      <li><a href="#galery">Galeri</a></li>
      <li><a href="#services">Layanan</a></li>
      <li><a href="#about">Tentang Kami</a></li>
      <li class="ctn"><a href="login">Masuk</a></li>
    </ul>
    <img src="assets/images/button1.png" alt="" class="menu-btn">
  </nav>

  <header>
    <div class="header-content">
      <h1>SELAMAT DATANG DI INPEBAN</h1>
      <div class="line"></div>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt tempore dicta vel! Doloribus deserunt sint magnam natus in, sequi hic a autem iste vel dolores, inventore facere ea assumenda recusandae.</p>
    </div>
  </header>

  <div class="kotak tuban">
    <div class="row">
      <div class="col-md-6">
        <h1>Kabupaten Tuban</h1>
        <h5>Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental
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
              <div class="col">
                <div class="cardd">
                  <img src="assets/images/card.png" alt="card">
                  <div class="deskripsi">
                    <p><a href="detail">Nama Tempat Apa</a></p>
                    <p>⭐4.5</p>
                    <p>Tempat Religius</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="cardd">
                  <img src="assets/images/card.png" alt="card">
                  <div class="deskripsi">
                    <p><a href="detail">Nama Tempat Apa</a></p>
                    <p>⭐4.5</p>
                    <p>Tempat Religius</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="cardd">
                  <img src="assets/images/card.png" alt="card">
                  <div class="deskripsi">
                    <p><a href="detail">Nama Tempat Apa</a></p>
                    <p>⭐4.5</p>
                    <p>Tempat Religius</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div id="galery">
        <h1>Galeri</h1>
          <div class="card">
            <div class="row">
              <div class="col">
                <div class="cardd">
                  <img src="assets/images/card.png" alt="card">
                  <div class="deskripsi">
                    <p>Nama Tempat Apa</p>
                    <p>⭐4.5</p>
                    <p>Tempat Religius</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="cardd">
                  <img src="assets/images/card.png" alt="card">
                  <div class="deskripsi">
                    <p>Nama Tempat Apa</p>
                    <p>⭐4.5</p>
                    <p>Tempat Religius</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="cardd">
                  <img src="assets/images/card.png" alt="card">
                  <div class="deskripsi">
                    <p>Nama Tempat Apa</p>
                    <p>⭐4.5</p>
                    <p>Tempat Religius</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div id="services">
        <h1>Layanan Kami</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam blanditiis explicabo magni cum dignissimos vitae doloribus voluptatibus! Quasi deleniti iure, libero pariatur, quaerat totam vitae doloremque asperiores rem accusantium eius.</p>
        <div class="form">
          <h2 class="text-center">Form Services</h2>
          <form>
            <div class="form-group row">
              <label for="staticName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="staticName" placeholder="Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="Phone" class="form-control" id="inputPhone" placeholder="Phone">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="Email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="Date" class="form-control" id="inputDate" placeholder="Date">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTopic" class="col-sm-2 col-form-label">Topic</label>
              <div class="col-sm-10">
                <input type="Topic" class="form-control" id="inputTopic" placeholder="Topic">
              </div>
            </div>
            <div class="form-group row">
              <label for="formGroupDescription" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="textarea" class="form-control" id="formGroupDescription" placeholder="Type here..." style="height: 100px;">
              </div>
            </div>
                       <div class="form-group row ">
              <div class="col-sm-1 offset-sm-11">
                <button type="button" class="btn btn-custom btn-lg form-control">Submit</button>
            </div>

          </form>
        </div>
      </div>

      <div id="about">
        <h1>Tentang Kami</h1>
        <div class="card">
          <div class="row">
            <div class="col">
              <img src="assets/images/anthon.png" alt="profil" class="profil">
              <h4>Anthonio Akbar</h4>
              <p>Backend Developer&UI/UX Designer</p>
              <p>Universitas Pendidikan Indonesia</p>
            </div>
            <div class="col">
              <img src="assets/images/nurunnaf.jpg" alt="profil" class="profil">
              <h4>Nurun Nafisah</h4>
              <p>Frontend Developer&UI/UX Designer</p>
              <p>Universitas Negeri Surabaya</p>
            </div>
            <div class="col">
              <img src="assets/images/lidya.jpeg" alt="profil" class="profil">
              <h4>Lidya Gabriella Tarigan</h4>
              <p>Backend Developer&UI/UX Designer</p>
              <p>Universitas Sumatra Utara</p>
            </div>
            <div class="col">
              <img src="assets/images/rossy.jpg" alt="profil" class="profil">
              <h4>Nur Rosydatun Nafiah</h4>
              <p>Frontend Developer&UI/UX Designer</p>
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
        menuBtn.addEventListener('click',()=>{
          navlinks.classList.toggle('mobile-menu')
        })

      </script>
      <footer>
        <p style="color: #F6FFF8;">Inpeban@Copyright2023</p>
      </footer>
</body>
</html>