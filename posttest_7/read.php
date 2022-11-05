<?php
include 'functions.php';

$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 5;

//Record
$stnt = $pdo->prepare('SELECT * FROM buku ORDER BY id LIMIT :current_page, :record_per_page');
$stnt->bindValue(':current_page', ($page 1))