<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "carrizalm");

if ($conexion->connect_error){
    $_SESSION['mensaje'] = "Error de conexión:" . $conexion->connect_error;
} else {
    //echo "Conexión exitosa";
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$puesto = $_POST['puesto'];
$otro = $_POST['otro'];
$cv = $_POST['cv'];

$sql = "INSERT INTO vacantes (nombre, apellido, email, telefono, puesto, otro, cv) VALUES ('$nombre', '$apellido', '$email','$telefono','$puesto','$otro','$cv')";

if ($conexion->query($sql) === TRUE){
    $_SESSION['mensaje'] = "Datos guardados correctamente";
    echo '<script>alert("Datos guardados correctamente");</script>'; // Muestra un alert con el mensaje
} else {
    $_SESSION['mensaje'] = "Error al guardar los datos:" . $conexion->error;
}

$conexion->close();

// Redirige después de mostrar el aler
echo '<script>window.location.href = "FormularioVacantes.php";</script>';
?>