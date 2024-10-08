<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorias</title>
</head>
<body>
    <div class="container" id="container">
        
        <div class="form-container sign-in">
            <form action="sesion.php" method="POST">
                <h2>También visítanos en</h2>
                <div class="social-icons">
                    <a href="https://utzmg.edu.mx/" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="https://www.facebook.com/UTZMG?mibextid=ZbWKwL" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/utzmg_oficial?igsh=MmVuY21tbTVxY2lr" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@utzmg_oficial?_t=8myqsKJWqvu&_r=1" class="icon"><i class="fa-brands fa-tiktok"></i></a>
                </div>
                <input type="text" id="matricula" name="mat" placeholder="Matrícula" required>
                <input type="password" id="contraseña" name="pass" placeholder="Contraseña" required>
                <button type="submit" id="loginBtn">Iniciar sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <button class="hidden" id="login">Inicia sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bienvenido usuario</h1>
                    <p>Inicia sesión con tu correo y contraseña por favor</p>
                </div>
            </div>
        </div>
    </div>

    <script src="../Scripts/script-log.js"></script>
</body>
</html>

<style>
    body {
    background-image: url('../imagenes/fondo.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: 0;
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

.container {
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
    background-color: rgba(255, 255, 255); /* Fondo blanco con transparencia */
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    z-index: 2;
}

.container::before {
    content: "";
    position: absolute;
    top: 5%; /* Ajusta la posición hacia abajo */
    left: 6%; /* Ajusta la posición hacia la derecha */
    width: 11%;
    height: 16%;
    background-image: url('../imagenes/fondoformulario.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    opacity: 0.5;
    z-index: 1;
}

.container p {
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.3px;
    margin: 20px 0;
}

.container span {
    font-size: 12px;
}

.container a {
    color: #333;
    font-size: 13px;
    text-decoration: none;
    margin: 15px 0 10px;
}

.container button {
    background-color: #fff;
    color: #62152D;
    font-size: 12px;
    padding: 10px 45px;
    border: 1px solid transparent;
    border-radius: 10px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
    cursor: pointer;
}

#loginBtn {
    border: 2px solid #62152D; /* Aquí se agrega el borde blanco */
}

.container form {
    background-color: transparent; /* Hacer transparente para mostrar el fondo */
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    height: 100%;
    z-index: 3; /* Asegurar que el formulario esté por encima del fondo */
}

.container input {
    background-color: rgba(238, 238, 238, 0.8); /* Cambiar el último valor para ajustar la transparencia */
    border: none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    width: 100%;
    outline: none;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
    z-index: 3;
}

.sign-in {
    left: 0;
    width: 50%;
    z-index: 2;
}



.sign-up {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.container.active .sign-up {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: move 0.6s;
}

@keyframes move {
    0%, 49.99% {
        opacity: 0;
        z-index: 1;
    }
    50%, 100% {
        opacity: 1;
        z-index: 5;
    }
}

.social-icons {
    margin: 20px 0;
}

.social-icons a {
    border: 1px solid #ccc;
    border-radius: 20%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 3px;
    width: 40px;
    height: 40px;
}

.toggle-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: all 0.6s ease-in-out;
    border-radius: 150px 0 0 100px;
    z-index: 1000;
}

.container.active .toggle-container {
    transform: translateX(-45%);
    width: 200%;
    border-radius: 0 150px 100px 0;
}

.toggle {
    background-color: #62152D;
    height: 100%;
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: all 0.6s ease-in-out;
}

.container.active .toggle {
    transform: translateX(50%);
}

.toggle-panel {
    position: absolute;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 30px;
    text-align: center;
    top: 0;
    transform: translateX(0);
    transition: all 0.6s ease-in-out;
}

.toggle-left {
    transform: translateX(-200%);
}


.toggle-right {
    right: 0;
    transform: translateX(0);
}

.container.active .toggle-right {
    transform: translateX(200%);
}


.error-message {
    color: red;
    text-align: center;
    margin-top: 10px;
}
</style>