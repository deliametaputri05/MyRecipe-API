<?php

include 'conn.php';



$id = $_POST['id'];
$gambar = $_POST['gambar'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$alat = $_POST['alat'];
$bahan = $_POST['bahan'];
$prosedur = $_POST['prosedur'];
$kalori = $_POST['kalori'];
$karbo = $_POST['karbo'];
$protein = $_POST['protein'];

$connect->query("UPDATE tb_food SET gambar='" . $gambar . "', nama='" . $nama . "', deskripsi='" . $deskripsi . "', alat='" . $alat . "', bahan='" . $bahan . "', prosedur='" . $prosedur . "', kalori='" . $kalori . "', karbo='" . $karbo . "', protein='" . $protein . "'WHERE id=" . $id);
