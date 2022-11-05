<?php
function pdo_connect_mysql() {
     $database_host = 'localhost';
     $database_user = 'root';
     $database_password = ' ';
     $database_name = 'crudphp';

     try {
          return new PDO('mysql:host=' . $database_host . ';dbname= ' . $database_name . ';charset=utf8', $database_user, $database_password ');
     } catch (PDOException $exception) {
          exit('Gagal Terhubung ke Database!);
     }
}

function template_header($title){
echo <<< EOT;
<!DOCTYPE html>
<html lang="en">
<head>
     <title> $title </title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navtop">
     <div>
          <h1> Website Title </h1>
          <a href="index.php"><i class="home"></i> Home </a>
     </div>
</nav>
EOT;
}

function template_footer() {
echo <<<EOT
     </body>
</html>
EOT;
}
?>