<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Akhir navigasi -->
<div class="container pt-5 my-4">
        <div class="card shadow">
            <div class="card" >
                <h5 class="card-header headertabel">Status Pengaduan</h5>
                <div class="card-body">
                    {{-- <h5 class="card-title"></h5> --}}
                    <table class=" table table-striped-columns">
                        <thead>
                            <th></th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </thead>
                        <tbody>
                            <th scope="row">1.</th>
                            <td>Ilham</td>
                            <td>Selesai</td>
                            <td>23-05-10</td>
                        </tbody>
                        <tbody>
                            <th scope="row">1.</th>
                            <td>Adam</td>
                            <td>Proses</td>
                            <td>2-30-12</td>
                        </tbody>
                      </table></p>
                </div>
            </div>
        </div>
        </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>