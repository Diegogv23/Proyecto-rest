<form action="agregar_empleado.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Cargo: <input type="text" name="cargo" required><br>
    Salario: <input type="number" step="0.01" name="salario" required><br>
    Teléfono: <input type="text" name="telefono"><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Agregar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "INSERT INTO empleados (nombre, cargo, salario, telefono, email)
            VALUES ('$nombre', '$cargo', '$salario', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado agregado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>