<?php

include 'conn.php';



$id = $_POST['id'];
$gambar = $_POST['gambar'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$alat = $_POST['alat'];
$bahan = $_POST['bahan'];
$prosedur = $_POST['prosedur'];

$connect->query("UPDATE tb_food SET gambar='" . $gambar . "', nama='" . $nama . "', deskripsi='" . $deskripsi . "', alat='" . $alat . "', bahan='" . $bahan . "', prosedur='" . $prosedur . "' WHERE id=" . $id);
