<?php
include 'conn.php';
$image = $_FILES['gambar']['name'];

$imagePath = "uploads/" . $image;

move_uploaded_file($_FILES['gambar']['tmp_name'], $imagePath);
