<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Styles/style-alu.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorias</title>
</head>
<body>
    <div class="top-bar">
        <img src="../imagenes/iconos/capa-mas (1).png" alt="Icono" class="icon" onclick="toggleSidebar()">
        <h2>Inicio</h2>
    </div>

    <div class="outer-white-rectangle">
        <div class="white-rectangle">






            <?php
            session_start();
            $nombrealu=$_SESSION['nombre_alumno'];
            echo "<h3>Bienvenido  $nombrealu </h3>"
            ?>





        </div>
        <div class="additional-text">
            <p>En esta página web, puedes solicitar asesorías de forma rápida y sencilla en cualquier momento.</p>
        </div>
    </div>
    
    

      <div class="sidebar" id="sidebar">
        <div class="profile-image">
          <img src="../imagenes/utzmg.webp" alt="Imagen de perfil">
      </div>
        <!-- <button class="sidebar-btn">
            <img src="../imagenes/iconos/puerta-abierta (1).png" alt="Icono 1" class="sidebar-icon">
            Inicio
            <div class="line"></div>
        </button> -->
        <button  id="solibutton" class="sidebar-btn">
            <img src="../imagenes/iconos/diario-alternativo (1).png" alt="Icono 2" class="sidebar-icon">
            Solicitud
            <div class="line"></div>
        </button>
        <button class="sidebar-btn">
            <img src="../imagenes/iconos/mensaje.png" alt="Icono 4" class="sidebar-icon">
            Mensaje
            <div class="line"></div>
        </button>
        <button class="sidebar-btn">
            <img src="../imagenes/iconos/calendario.png" alt="Icono 5" class="sidebar-icon">
            Calendario
            <div class="line"></div>
        </button>
        <button class="sidebar-btn">
            <img src="../imagenes/iconos/interrogatorio (1).png" alt="Icono 3" class="sidebar-icon">
            Ayuda
            <div class="line"></div>
        </button>
        <button id="logoutButton" class="sidebar-btn logout-btn">
            <img src="../imagenes/iconos/salir-alt (1).png" alt="Icono 3" class="sidebar-icon">
            <?php
            echo "Cerrar Sesión"
            ?>
            <div class="line"></div>
        </button>
        
               
    </div>
    
   

    <div class="image-container">
        <img src="../imagenes/fondoinicio.jpg">
    </div>

    <script src="../Scripts/script-alu.js"></script> <!-- Agrega el archivo JavaScript -->
    <script src="../Scripts/script-close.js"></script>
</body>
</html>