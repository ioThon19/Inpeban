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
    <div class="container-detail">
        <h1 class="h1detail">Halaman Detail</h1>
        <div class="row">
            <div class="col deskripsi-img">
                <img id="itemImage" src="" alt="Item Image">
            </div>
            <div class="col deskripsi-detail">
                <h1>⭐<span id="itemRating"></span></h1>
                <h5>Nama Tempat</h5>
                <h4 id="itemName"></h4>
                <h5>Kategori</h5>
                <h4 id="itemCategory"></h4>
                <h5>Alamat</h5>
                <h4 id="itemAddress"></h4>
            </div>
        </div>
    </div>
    <script src="{{asset('js/detail.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>