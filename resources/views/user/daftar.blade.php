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
    <div class="container-daftar">
        <div class="kotak-daftar">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{$err}}</p>
            @endforeach
            @endif
            <h1>DAFTAR</h1>
            <form method = "POST" action="{{route ('daftar.action') }}">
                @csrf
                <div class="input-container">
                    <input type="email" name="email" class="form-control form-control-lg input-daftar" placeholder="Email">
                </div>
                <div class="input-container">
                    <input type="text" name="username" class="form-control form-control-lg input-daftar" placeholder="Username">
                </div>
                <div class="input-container">
                    <input type="password" name="password" class="form-control form-control-lg input-daftar" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block button-daftar">DAFTAR</button>
                <p>Sudah mempunyai akun? <a href="login">MASUK</a></p>
            </form>
        </div>
    </div>
</body>
</html>