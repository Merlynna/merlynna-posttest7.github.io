<!DOCTYPE html>
<html lang="en">
<head>
     <title> Create Table | Welcome </title>
     <link rel="stylesheet" href="tampilantanpacss.css">
</head>
<body bgcolor="papayawhip">
     <br>
     <h2 align="center"> Bagaimana Penampilan Tabel Tanpa Menggunakan <br> Database PHP? </h2>
     <br>
     <hr align="center" width="70%" color="white">
     <br>
     <p align="center"> Tabel Data Buku </p>
     <br>
     <table border="2" cellspacing="5" align="center">
          <tr>
               <th> No. </th>
               <th> ID Buku </th>
               <th> Nama Buku </th>
               <th> Jenis Buku </th>
               <th> Harga Buku </th>
               <th> Nama Penulis </th>
               <th> Nama Penerbit </th>
               <th> Aksi </th>
          </tr>
          <tr>
               <td> (1) </td>
               <td> 10001 </td>
               <td> Selendang Sutra Putih </td>
               <td> Buku Fiksi </td>
               <td> Rp. 30.000 </td>
               <td> Atiqah Utami Savitri </td>
               <td> Rumah Citra Media </td>
               <td>
                    <button><a href="update.php"> Update </button>
                    <button><a href="indeks.html"> Delete </button>
               </td>
          </tr>
          <tr>
               <td> (2) </td>
               <td> 10002 </td>
               <td> Sang Bidadari Ciptaan Tuhan </td>
               <td> Buku Romansa </td>
               <td> Rp. 30.000 </td>
               <td> Syafika Kamalia Fitria Sianturi  </td>
               <td> Rumah Citra Media </td>
               <td>
                    <button><a href="update.php"> Update </button>
                    <button><a href="indeks.html"> Delete </button>
               </td>
          </tr>
          <tr>
               <td> (3) </td>
               <td> 10003 </td>
               <td> Apalah Arti Menunggu </td>
               <td> Buku Romansa </td>
               <td> Rp. 30.000 </td>
               <td> Raffian Andriansyah  </td>
               <td> Rumah Citra Media </td>
               <td>
                    <button><a href="update.php"> Update </button>
                    <button><a href="indeks.html"> Delete </button>
               </td>
          </tr>
          <tr>
               <td> (4) </td>
               <td> 10004 </td>
               <td> Kutemu Cinta di Rumah Susun </td>
               <td> Buku Romansa </td>
               <td> Rp. 25.000 </td>
               <td> Siti Nadila Khumairah  </td>
               <td> Gramedia House </td>
               <td>
                    <button><a href="update.php"> Update </button>
                    <button><a href="indeks.html"> Delete </button>
               </td>
          </tr>
     </table>
     <button class="php"><a href="indeks.html"> Kembali </a></button>
</body>
</html>