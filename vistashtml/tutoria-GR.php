<?php



?>  








<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de T.G.</title>
    <link rel="stylesheet" href="../Styles tuto/style-GR.css">
</head>
<body>
    <div id="tutoriagrbutton" class="top-bar">
        <img src="../imagenes/iconos/atras.png" alt="Icono" class="icon" onclick="toggleSidebar()">
        <h2>Tutoria Grupal Registro</h2>
    </div>   

    <div class="container">
        <div class="footer">
            <div class="input-group">
                <div>
                    <input type="text" id="carrera" placeholder="Carrera">
                </div>
                <div>
                    <input type="text" id="grupo" placeholder="Grupo">
                </div>
                <div>
                    <input type="text" id="tutor" placeholder="Tutor">
                </div>
            </div>

            <div class="input-group">
                <div>
                    <input type="text" id="fecha-sesion" placeholder="Fecha de Sesión">
                </div>
                <div>
                    <input type="text" id="tema" placeholder="Tema">
                </div>
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Alumnos</th>
                        <th>Asistencia</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Repite las filas según sea necesario -->
                    <tr>
                        <td><input type="text" class="nombre-alumno" placeholder="Nombre del alumno"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="nombre-alumno" placeholder="Nombre del alumno"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="nombre-alumno" placeholder="Nombre del alumno"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="nombre-alumno" placeholder="Nombre del alumno"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="nombre-alumno" placeholder="Nombre del alumno"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="footer">
            <div>Total de alumnos que se detectaron en riesgo:</div>
            <div class="input-group">
                <div>
                    <input type="text" id="riesgo-academico" placeholder="Académico">
                </div>
                <div>
                    <input type="text" id="riesgo-personal" placeholder="Personal">
                </div>
            </div>
            <div>Total de alumnos que asistieron y canalizados:</div>
            <div class="input-group">
                <div>
                    <input type="text" id="total-asistieron" placeholder="Total de alumnos que asistieron">
                </div>
                <div>
                    <input type="text" id="total-canalizados" placeholder="Total de alumnos canalizados">
                </div>
            </div>
        </div>
    </div>

    <script src="../Scripts tuto/script-tutoria-RG.js"></script>
</body>
</html>
