<?php
    require 'koneksi.php';
    $result = mysqli_query($conn, "SELECT * FROM databuku");
    $databuku = [];
    while($row = mysqli_fetch_assoc($result)){
        $databuku[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Seniman Indonesia | Login </title>
</head>
<body>
     <h2> Tambah Data Buku </h2>
    <form action="" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nim" id="nim" required><br><br>
        <label for="nama">Alamat</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="nama">Nama Buku</label><br>
        <input type="text" name="buku" id="buku" required><br><br>
        <label for="nama">Nama Penulis</label><br>
        <input type="text" name="penulis" id="penulis" required><br><br>
        <label for="nama">Nama Penerbit</label><br>
        <input type="text" name="penerbit" id="penerbit" required><br><br>
        <button type='submit' name="tambah">TAMBAH DATA</button>
    </form>

    <?php
     require "koneksi.php";

     if(isset($_POST['tambah'])){
          $nama = htmlspecialchars($_POST['nama']);
          $alamat = htmlspecialchars($_POST['alamat']);
          $penulis = htmlspecialchars($_POST['penullis']);
          $judul = htmlspecialchars($_POST['judul']);

          $sql = "INSERT INTO mahasiswa (id, nama, alamat, penulis, judul) VALUES ('', '$nama', '$alamat', '$penulis', '$judul')";
          $result = mysqli_query($conn, $sql);

          if($result){
               echo"
               <script> alert('DATA BERHASIL DITAMBAHKAN');
               document.location.href = 'join.php' </script>";
          } else {
               echo"
               <script> alert('DATA GAGAL DITAMBAHKAN');
               document.location.href = 'create.php' </script>";
          }
    }
}

?>
</body>
</html>
