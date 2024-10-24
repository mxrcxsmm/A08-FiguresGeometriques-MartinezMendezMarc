// Función que se encargará de validar los campos del formulario
function validarFormulario(event) {
    event.preventDefault(); // Prevenir el envío del formulario por defecto
    let isValid = true;

    // Selección de los inputs del formulario
    const lados = document.querySelectorAll('input[type="number"]');
    const mensajeError = document.getElementById('mensaje-error'); // Seleccionar el div de mensaje

    // Limpiar el mensaje de error al iniciar la validación
    mensajeError.textContent = '';

    // Validar que los campos no estén vacíos y sean números positivos
    lados.forEach(lado => {
        if (lado.value.trim() === '' || isNaN(lado.value) || parseFloat(lado.value) <= 0) {
            lado.classList.add('is-invalid'); // Añadir clase para indicar el error
            isValid = false;
        } else {
            lado.classList.remove('is-invalid');
        }
    });

    // Si los campos no son válidos, mostrar el mensaje de error
    if (!isValid) {
        mensajeError.textContent = 'Por favor, complete todos los campos con valores positivos.'; // Mostrar mensaje en pantalla
        mensajeError.style.color = 'red'; // Establecer color rojo
        Swal.fire({
            icon: "error",
            title: "Oops... Algo anda mal!",
            text: "Por favor, complete todos los campos con valores positivos.",
        });
    } else {
        event.target.submit(); // Enviar el formulario si todo es correcto
    }
}

// Añadir la validación a los formularios
document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.getElementById('formulario');
    if (formulario) {
        formulario.addEventListener('submit', validarFormulario);
    }
});
