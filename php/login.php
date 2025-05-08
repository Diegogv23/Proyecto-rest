<?php
session_start();
include '../config/bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? ''; 
    $contraseña = $_POST['contraseña'] ?? '';

    if (empty($usuario) || empty($contraseña)) {
        echo "Usuario y contraseña son obligatorios.";
        exit();
    }

    $sql = "SELECT contraseña FROM usuarios WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            if (password_verify($contraseña, $fila["contraseña"])) {
                $_SESSION["usuario"] = $usuario;
                header("Location: ../views/dashboard.php");
                exit();
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "Usuario no encontrado";
        }

        $stmt->close();
    } else {
        echo "Error en la consulta.";
    }

    $conexion->close();
=======
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
