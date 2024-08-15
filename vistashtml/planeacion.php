<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeación Cuatrimestral</title>
    <link rel="stylesheet" href="../Styles tuto/planeacion.css">
</head>
<body>
    <div id="platrasbutton" class="top-bar">
        <img src="../imagenes/iconos/atras.png" alt="Icono" class="icon" onclick="toggleSidebar()">
        <h2>Planeación Cuatrimestral</h2>
    </div>   

    <div class="container">
        <div class="footer">
            <div class="conter">
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
                    <input type="date">
                </div>
                <div>
                    <input type="text" id="tema" placeholder="Cuatrimestre">
                </div>
            </div>
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tema o Titulo de la Tutoría Grupal</th>
                        <th>Numero de Semana Programada</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Repite las filas según sea necesario -->
                    <tr>
                        <td>
                            <input type="text" class="numero-pequeno">
                        </td>
                        <td>
                            <input type="text" class="nombre-alumno tema">
                        </td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="numero-pequeno">
                        </td>
                        <td>
                            <input type="text" class="nombre-alumno tema">
                        </td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="numero-pequeno">
                        </td>
                        <td>
                            <input type="text" class="nombre-alumno tema">
                        </td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="numero-pequeno">
                        </td>
                        <td>
                            <input type="text" class="nombre-alumno tema">
                        </td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="numero-pequeno">
                        </td>
                        <td>
                            <input type="text" class="nombre-alumno tema">
                        </td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="extra-section">
            <div class="extra-row">
                <div class="extra-input extra-small">
                    <label for="numero">Total de tutorias grupales planeadas:</label>
                    <input type="text" id="numero" placeholder="Número">
                </div>
                <div class="extra-empty"></div> <!-- Espacio vacío para separar los elementos -->
            </div>
            <div class="extra-row">
                <div class="extra-comment large">
                    <label for="texto1">Otras actividades planeadas en materia de tutorias:</label>
                    <textarea id="texto1" placeholder="Comentario..."></textarea>
                </div>
                <div class="extra-comment large">
                    <label for="texto2">Observaciones y notas:</label>
                    <textarea id="texto2" placeholder="Comentario..."></textarea>
                </div>
            </div>
            
        </div>
    </div>

    <script src="../Scripts tuto/script-pla-tut.js"></script>
</body>
</html>
