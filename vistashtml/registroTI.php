<?php
require 'config.php';
session_start();

// Inicializar variables para los datos del usuario
$nombre = '';
$apellidoPaterno = '';
$apellidoMaterno = '';
$correo = '';
$matricula = '';
$mensaje = '';
$asesoria = '';
$comentarios = '';  // Inicializa la variable comentarios

// Obtener la matrícula del usuario desde la sesión
$matriculaUsuario = $_SESSION['nombre_alumno'] ?? '';

if ($matriculaUsuario) {
    // Consultar los datos del usuario
    $query = "SELECT matricula_tutor, nombre, app, apm, correo  FROM usuarios WHERE matricula_tutor = $1";
    $result = pg_query_params($conexion, $query, [$matriculaUsuario]);

    if ($result && pg_num_rows($result) > 0) {
        $usuario = pg_fetch_assoc($result);
        $nombre = htmlspecialchars($usuario['nombre']);
        $apellidoPaterno = htmlspecialchars($usuario['app']);
        $apellidoMaterno = htmlspecialchars($usuario['apm']);
        $correo = htmlspecialchars($usuario['correo']);
        $matricula = htmlspecialchars($usuario['matricula_tutor']); // Asegúrate de que 'matricula_tutor' sea el campo correcto
    } else {
        $mensaje = 'Matrícula no encontrada.';
    }
} else {
    $mensaje = 'No se ha iniciado sesión.';
}

// Manejar el envío del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreForm = $_POST['nombre'];
    $apellidoPaternoForm = $_POST['apellido-paterno'];
    $apellidoMaternoForm = $_POST['apellido-materno'];
    $correoForm = $_POST['correo'];
    $matriculaForm = $_POST['matricula'];
    $asesoria = $_POST['asesoria'];
    $comentarios = $_POST['comentarios'];

    // Validar que todos los campos requeridos estén llenos, incluyendo comentarios
    if ($nombreForm && $apellidoPaternoForm && $apellidoMaternoForm && $correoForm && $matriculaForm && $asesoria !== 'ninguna' && !empty($comentarios)) {
        
        // Verificar si la matrícula existe en la tabla 'alumnos'
        $query = "SELECT COUNT(*) FROM alumnos WHERE matricula = $1";
        $result = pg_query_params($conexion, $query, [$matriculaForm]);
        $count = pg_fetch_result($result, 0, 0);

        if ($count == 0) {
            $mensaje = "La matrícula no está registrada en la tabla de alumnos.";
        } else {
            // Insertar datos en la tabla
            $query = "INSERT INTO registro_tutoria (matricula, nombre_alumno, app, apm, correo_alumno, asesoria, comentarios) VALUES ($1, $2, $3, $4, $5, $6, $7)";
            $result = pg_query_params($conexion, $query, [$matriculaForm, $nombreForm, $apellidoPaternoForm, $apellidoMaternoForm, $correoForm, $asesoria, $comentarios]);

            if ($result) {
                $mensaje = "Solicitud exitosa";
                // Limpiar el formulario
                $asesoria = $comentarios = '';
            } else {
                $mensaje = "Error al registrar la solicitud.";
            }
        }
    } else {
        $mensaje = "Rellena los campos faltantes para hacer la solicitud.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../Styles/style-soli.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes</title>
    <style>
        /* Estilo para el mensaje emergente */
        .alert {
            display: none;
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .alert.show {
            display: block;
        }
        .alert.success {
            border-color: green;
            color: green;
        }
        .alert.error {
            border-color: red;
            color: red;
        }
    </style>
</head>
<body>
    <div id="salirtutbutton" class="top-bar">
    <img src="../imagenes/iconos/atras.png" alt="Icono" class="icon" onclick="toggleSidebar()">
        <h2>Solicitud</h2>
    </div>   


    <div class="font-family">
        <div class="form-container">
            <h2>Formulario de Asesoría</h2>
            <div class="alert <?php echo $mensaje == "Solicitud exitosa" ? 'success' : 'error'; ?> <?php echo $mensaje ? 'show' : ''; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
            <form method="post" action="">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="apellido-paterno">Apellido Paterno:</label>
                        <input type="text" id="apellido-paterno" name="apellido-paterno" value="<?php echo $apellidoPaterno; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="apellido-materno">Apellido Materno:</label>
                        <input type="text" id="apellido-materno" name="apellido-materno" value="<?php echo $apellidoMaterno; ?>" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" id="correo" name="correo" value="<?php echo $correo; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="matricula">Matrícula:</label>
                        <input type="text" id="matricula" name="matricula" value="<?php echo $matricula; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="asesoria">Asesoría:</label>
                    <select id="asesoria" name="asesoria">
                        <option value="ninguna">Ninguna</option>
                        <option value="tutoria">Solicitar Tutoría</option>
                        <option value="asesoria">Solicitar Asesoría</option>
                        <option value="baja">Solicitud de Baja</option>
                        <option value="becas y tramites">Apoyo Información Becas y Trámites</option>
                        <option value="servicios al estudiante">Apoyo Servicios al Estudiante</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comentarios">Comentarios:</label>
                    <textarea id="comentarios" name="comentarios"><?php echo htmlspecialchars($comentarios); ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Solicitar</button>
                </div>
            </form> 
        </div>
    </div>

    <script src="../Scripts/script-soli.js"></script> <!-- Agrega el archivo JavaScript -->
    <script src="../Scripts/script-close.js"></script>
    <script src="../Scripts tuto/script-reg-ti.js"></script>
    <script>
        // Mostrar el mensaje emergente y luego ocultarlo después de unos segundos
        setTimeout(function() {
            const alertBox = document.querySelector('.alert');
            if (alertBox) {
                alertBox.classList.remove('show');
            }
        }, 3000); // Ocultar después de 3 segundos
    </script>
</body>
</html>
