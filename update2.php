<?php
include 'koneksi.php';
$plat = $_POST['plat'];
$nama = $_POST['nama'];
$sepeda = $_POST['sepeda'];
$query ="UPDATE tempat SET nama = '$nama',sepeda = '$sepeda' WHERE plat = '$plat' ";
$connect->query($query);

header("Location: home.php")

?>