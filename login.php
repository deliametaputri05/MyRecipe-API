<?php

include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$queryResult = $connect->query("SELECT * FROM tb_user WHERE username='" . $username . "' and password='" . $password . "'");

$result = array();

while ($fetchData = $queryResult->fetch_assoc()) {
    $result[] = $fetchData;
}

echo json_encode($result);
