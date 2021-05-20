<?php

include 'conn.php';

$gambar = $_POST['gambar'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$alat = $_POST['alat'];
$bahan = $_POST['bahan'];
$prosedur = $_POST['prosedur'];
$kalori = $_POST['kalori'];
$karbo = $_POST['karbo'];
$protein = $_POST['protein'];

$connect->query("INSERT INTO tb_food (gambar,nama,deskripsi,alat,bahan,prosedur,kalori,karbo,protein)
 VALUES ('" . $gambar . "','" . $nama . "','" . $deskripsi . "','" . $alat . "','" . $bahan . "','" . $prosedur . "','" . $kalori . "','" . $karbo . "','" . $protein . "')");
