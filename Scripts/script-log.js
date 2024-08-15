document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');
    const container = document.getElementById('container');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe de manera tradicional

        const matricula = document.getElementById('matricula').value.trim();
        const contraseña = document.getElementById('contraseña').value.trim();

        // Validación de campos vacíos
        if (matricula === "" || contraseña === "") {
            alert("Matrícula o contraseña no pueden estar vacíos.");
            return;
        }

        const formData = new FormData(loginForm);

        fetch('login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Si el login es exitoso, agrega la clase 'active' y redirecciona después de la transición
                container.classList.add("active");
                container.addEventListener('transitionend', () => {
                    window.location.href = '../dashboard/dashboard.php';
                }, { once: true });
            } else {
                // Si el login falla, muestra un mensaje de error
                alert("Matrícula o contraseña incorrectos.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Ocurrió un error al intentar iniciar sesión.');
        });
    });
});
