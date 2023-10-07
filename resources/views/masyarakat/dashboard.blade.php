<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
    h2{
        color: black;
        font-size: 30px;
        display: flex;
        justify-content: center;
        padding: 100px 0 10px 0;
    }
    h4{
        color: black;
        font-size: 25px;
        display: flex;
        justify-content: center;
        padding: 50px 0 100px 0;
    }
</style>

<body>
<nav class="navbar bg-success navbar-expand-lg bg-body-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LAPORAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tentang Laporan</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
        <button class="btn btn-outline-dark" type="submit"><a href="{{url('masyarakat/login')}}">LOGIN</a></button>
          <button class="btn btn-outline-dark" type="submit"><a href="{{url('masyarakat/registrasi')}}">DAFTAR</a></button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="card shadow mt-4">
        <div class="bg-gradient justify-content-between">
            <a href="{{url('masyarakat/laporan')}}" >
            </a>
        </div>
        <div class="card-body">
            @if (session('pesan'))
                <div class="alert alert-danger" role="alert">
                    {{session('pesan')}}
                  </div>
                @endif
            <form action="" method="post">
                @csrf
                <h1>Welcome</h1>
                <h2>Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
                <h4>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h3>
            </form>
        </div>
    </div>
</div>
</body>
</html>