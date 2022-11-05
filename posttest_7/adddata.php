<!DOCTYPE html>
<html lang="en">
<head>
     <title> Update Data </title>
     <link rel="stylesheet" href="upload.css">
</head>
<body>
     <br>
     <br>
     <hr>
     <h4> Form Upload Data </h4>
     <hr>
     <br>
     <br>
     <table border="1" cellspacing="1" align="center">
         <tbody>
          <tr>
               <form action="loginupload.php" method="post">
                    <td><label for="ID"> ID Buku </label></td>
                    <td><input type="id" name="id" id="id"></td>
               </form>
          </tr>
          <tr>
               <form action="loginupload.php" method="post">
                    <td><label for="name"> Nama Buku </label></td>
                    <td><input type="text" name="name" id="name"></td>
               </form>
          </tr>
          <tr>
               <form action="loginupload.php" method="post">
                    <td><label for="tahun"> Tahun Terbit </label></td>
                    <td><input type="year" name="tahun" id="tahun"> </td>
               </form>
          </tr>
          <tr>
               <form action="loginupload.php" method="post">
                    <td><label for="jenis"> Jenis Buku </label></td>
                    <td><input type="text" name="jenis" id="jenis"></td>
               </form>
          </tr>
          <tr>
               <form action="loginupload.php" method="post">
                    <td><label for="penulis"> Penulis </label></td>
                    <td><input type="text" name="penulis" id="penulis"></td>
               </form>
          </tr>
         </tbody>
     </table>
     <button class="if"><a href="indeks.html"> Kembali </button>
</body>
</html>