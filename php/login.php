<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE username = '$usuario' AND password = '$password'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ../views/menu_principal.html");
        exit();
    } else {
        $_SESSION["error"] = "Usuario o contraseña incorrectos";
        header("Location: ../views/Login.html");
        exit();
    }
}
?>
