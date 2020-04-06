<?php
include 'koneksi.php';
$nama = $_GET['nama'];

$query ="DELETE FROM tempat WHERE nama = '$nama' ";

$connect->query($query);

header("Location: home.php")

?>