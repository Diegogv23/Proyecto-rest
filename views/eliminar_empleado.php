<form action="eliminar_empleado.php" method="POST">
    ID del empleado a eliminar: <input type="number" name="id" required><br>
    <input type="submit" value="Eliminar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion.php");

    $id = $_POST['id'];

    $sql = "DELETE FROM empleados WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado eliminado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>