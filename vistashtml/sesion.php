<?php
require 'config.php';
session_start();
$matricula = $_POST['mat'];
$clave = $_POST['pass'];

// Consulta para verificar si la matrícula o la matrícula del tutor es válida
$query = "SELECT id_rol FROM usuarios WHERE (matricula = '$matricula' OR matricula_tutor = '$matricula') AND contraseña = '$clave'";
$consulta = pg_query($conexion, $query);

if ($consulta) {
    $cantidad = pg_num_rows($consulta);
    if ($cantidad > 0) {
        $row = pg_fetch_assoc($consulta);
        $id_rol = $row['id_rol'];
        
        // Guardar la matrícula del usuario en la sesión
        $_SESSION['nombre_alumno'] = $matricula;

        // Redireccionar según el tipo de usuario
        if ($id_rol == 1) {
            // Si es alumno
            header("Location: index-alu.php");
            exit();
        } elseif ($id_rol == 2) {
            // Si es maestro
            header("Location: index-tut.php");
            exit();
        } else {
            // Manejo de otro caso, por ejemplo, si el rol no está definido
            header("Location: error.php");
            exit();
        }
    } else {
        echo "Usuario o contraseña incorrectos";
    }
} else {
    echo "Error en la consulta";
}
?>
