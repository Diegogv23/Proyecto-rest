<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "";   //poner la conexion a la base de datos no se te olvide ARLEY EL MAS TESO 

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    error_log("Error de conexión: " . $conn->connect_error);
}
?>

<!--CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    cargo VARCHAR(50) NOT NULL,
    salario DECIMAL(10, 2) NOT NULL,
    telefono VARCHAR(20),
    email VARCHAR(100) UNIQUE NOT NULL
);  -->