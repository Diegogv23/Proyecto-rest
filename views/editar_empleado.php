<form action="editar_empleado.php" method="POST">
    ID del empleado: <input type="number" name="id" required><br>
    Nombre: <input type="text" name="nombre" required><br>
    Cargo: <input type="text" name="cargo" required><br>
    Salario: <input type="number" step="0.01" name="salario" required><br>
    Teléfono: <input type="text" name="telefono"><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Actualizar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "UPDATE empleados SET 
            nombre = '$nombre', 
            cargo = '$cargo', 
            salario = '$salario', 
            telefono = '$telefono', 
            email = '$email' 
            WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado actualizado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>