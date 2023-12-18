document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('enviar').addEventListener('click', function (event) {
        event.preventDefault(); // evita el envio normal del form
        enviarFormulario('miFormulario');
    });
	document.getElementById('Comprar').addEventListener('click', function (event) {
        event.preventDefault(); 
        enviarFormulario('caja2');
    });
});

function enviarFormulario(cualquierFormulario) {
    var formulario = document.getElementById(cualquierFormulario);
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