function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var body = document.querySelector("body");
    var icon = document.querySelector(".icon");
    var sidebarWidth = sidebar.offsetWidth; // Ancho de la pestaña
    var iconWidth = icon.offsetWidth; // Ancho del icono
    sidebar.classList.toggle("active"); // Agrega o quita la clase "active" para mostrar o esconder la pestaña
    body.classList.toggle("sidebar-active"); // Agrega o quita la clase "sidebar-active" para deshabilitar o habilitar el desplazamiento del cuerpo

    // Mueve el icono junto con la pestaña
    if (sidebar.classList.contains("active")) {
        icon.style.left = (sidebarWidth - iconWidth - 10) + "px"; // Ajusta la posición del icono para que esté dentro de la pestaña abierta y ligeramente a la izquierda
    } else {
        icon.style.left = "10px"; // Ajusta la posición del icono cuando la pestaña está cerrada
    }
}





document.getElementById('alubutton').addEventListener('click' , function() {
    window.location.href = 'index-alu.html';
});

document.getElementById('solibutton').addEventListener('click' , function() {
    window.location.href = 'index-soli.html';
});

document.getElementById('msjbutton').addEventListener('click' , function() {
    window.location.href = 'index-msj.html';
});

document.getElementById('calbutton').addEventListener('click' , function() {
    window.location.href = 'index-cal.html';
});
