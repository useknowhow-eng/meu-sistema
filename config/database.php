<?php

$host = "localhost";
$db = "u68080283_erp_loja";
$user = "u68080283_erp_user";
$pass = "050610Amanda*";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");