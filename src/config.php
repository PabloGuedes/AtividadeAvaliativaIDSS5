<?php
$servername = "db"; // Nome do serviço do MySQL no Docker Compose
$username = "root";
$password = "senha_da_nasa";
$dbname = "atividadeavaliativaidss5";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
