
const loginBtn = document.getElementById('login');
const loginFormBtn = document.getElementById('loginBtn');



loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

loginFormBtn.addEventListener('click', () => {
    container.classList.add("active");

    // Redirigir a una nueva página después de que la transición termine
    container.addEventListener('transitionend', () => {
        window.location.href = 'index-alu.html'; // Reemplaza 'nueva_pagina.html' con la URL a la que quieras redirigir
    }, { once: true });
});
