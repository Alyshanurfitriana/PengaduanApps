<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-Succes bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="{{url('masyarakat/laporan')}}" class="btn btn-light">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th >NO TELEPON</th>
                            <th>KELAS</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>231005</td>
                            <td>Alysha</td>
                            <td>karakimasta</td>
                            <td>089648280575</td>
                            <td>Xll RPL</td>
                            <td >
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>