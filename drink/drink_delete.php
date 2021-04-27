<?php
include 'conn.php';
$id = $_POST['id'];
$connect->query("DELETE FROM tb_drink WHERE id=" . $id);
