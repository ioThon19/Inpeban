<?php 

$id = @$_GET['id'];
$sumber2 = 'https://my-json-server.typicode.com/Biella20/Inpeban/recomendation?id='.$id;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

</head>
<body>
    <div class="container-detail">
        <h1 class="h1detail">Halaman Detail</h1>
        <div class="row">
            <?php foreach ($data2 as $row) {
                # code...
            ?>

            <div class="col deskripsi-img">
                <img id="itemImage" src="<?php echo $row['image'] ?>" alt="Item Image">
            </div>
            <div class="col deskripsi-detail">
                <h1>⭐<span id="itemRating"><?php echo $row['rating'] ?></span></h1>
                <h5>Nama Tempat</h5>
                <h4 id="itemName"><?php echo $row['name'] ?></h4>
                <h5>Kategori</h5>
                <h4 id="itemCategory"><?php echo $row['category'] ?></h4>
                <h5>Alamat</h5>
                <h4 id="itemAddress"><?php echo $row['address'] ?></h4>
            </div>
            <?php }?>

        </div>
    </div>
    <script src="{{asset('assets/js/detail.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>