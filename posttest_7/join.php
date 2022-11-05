<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title> Come In Our Website </title>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-between">
        <h1> Data Buku </h1>
        <a class="btn btn-prymary" style="height: 40px;" href="tambah.php" role="button">Tambah</a>
    </div>
    <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Penulis</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-success" href="" role="button"><i class="fas fa-pencil-alt"></i></a>
                    <a class="btn btn-danger" href="" onclick="return confirm('Yakin ingin menghapus data ini?');" role="button"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>