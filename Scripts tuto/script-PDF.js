document.addEventListener('DOMContentLoaded', function() {
    var remedialButton = document.getElementById('remedialbutton');
    var asesoriaButton = document.getElementById('asesoriabutton');
    var bajaButton = document.getElementById('bajabutton');

    if (remedialButton) {
        remedialButton.addEventListener('click', function() {
            window.location.href = 'index-soli-tut.php';
        });
    }

    if (asesoriaButton) {
        asesoriaButton.addEventListener('click', function() {
            window.location.href = 'index-soli-tut.php';
        });
    }

    if (bajaButton) {
        bajaButton.addEventListener('click', function() {
            window.location.href = 'index-soli-tut.php';
        });
    }
});
