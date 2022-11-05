<!DOCTYPE html>
<html lang="en">
<head>
     <title> Update Data | Welcome </title>
     <link rel="stylesheet" href="tampilantanpacss.css">
</head>
<body bgcolor="deeppink">
     <br>
     <h2 align="center"> Update Data Buku </h2>
     <br>
     <hr align="center" width="70%" color="white">
     <br>
     <table border="2" cellspacing="2" align="center">
          <tr>
               <th><form action="" method="post">
                    <label for="id"> ID BUKU </label>
          </tr>
          <tr>
               <td><input type="number" name="id" id="id"></th></td>
          </tr>
          <tr>
               <th><form action="" method="post">
                    <label for="nama"> NAMA BUKU</label>
               </form></th>
          </tr>
          <tr>
               <td><input type="text" name="nama" id="nama"></td>
          </tr>
          <tr>
               <th><form action="" method="post">
                    <label for="harga"> HARGA BUKU </label>
          </tr>
          <tr>
               <td><input type="text" name="harga" id="harga"></td>
          </tr>
          <tr>
               <th><label for="jenis"> JENIS BUKU </label></th>
          </tr>
          <tr>
               <td><input type="text" name="jenis" id="jenis"></td>
          </tr>
          <tr>
               <th><label for="penulis"> NAMA PENULIS </label></th>
          </tr>
          <tr>
               <td><input type="text" name="penulis" id="penulis"></td>
          </tr>
          <tr>
               <th><label for="penerbit"> NAMA PENERBIT </label></th>
          </tr>
          <tr>
               <td><input type="text" name="penerbit" id="penerbit"></td>
          </tr>
     </table>
     <br>
     <button id="submit" type='submit' name="tambah"> Add Data </button>
     <button id="back"> Return </button>
</body>
</html>