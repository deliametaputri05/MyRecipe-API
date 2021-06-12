<?php

include 'conn.php';

$nama = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];


$connect->query("INSERT INTO tb_user (nama,jenkel,username,password,level,email,no_hp)
 VALUES ('" . $nama . "','" . $jenkel . "','" . $username . "','" . $password . "','" . $level . "','" . $email . "','" . $no_hp . "')");
