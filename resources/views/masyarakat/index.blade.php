<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" bordersspacing="0">
        <thead>
            <tr>
                <th>Nik</th>
                <th>Nama</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebas as $iyem)
                <tr>
                    <td>{{$iyem->nik}}</td>
                    <td>{{$iyem->nama}}</td>
                    <td>{{$iyem->tlp}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>