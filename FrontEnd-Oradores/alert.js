document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('enviar').addEventListener('click', function (event) {
        event.preventDefault(); // evita el envio normal del form
        enviarFormulario();
    });
});

function enviarFormulario() {
    var formulario = document.getElementById('miFormulario');
    var formData = new FormData(formulario);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'insert.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                alert(xhr.responseText);
                formulario.reset();
            } else {
                alert("Error al enviar el formulario. Por favor, inténtalo de nuevo.");
            }
        }
    };
    xhr.send(formData);
}