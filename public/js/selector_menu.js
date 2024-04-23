function mostrarContenido(tipo, elemento_seleccionado) {
    // Ocultar todo el contenido actual
    document.querySelectorAll('.caja_datos_hotel > div').forEach(elemento => {
        elemento.style.display = 'none';
    });

    // Quitar estilos de todos los elementos del menú lateral
    document.querySelectorAll('.caja_menu_lateral .elemento_caja').forEach(elemento => {
        elemento.classList.remove('elemento_caja_fondo');
    });

    // Cambiar el color de fondo y el color del texto del elemento seleccionado
    elemento_seleccionado.classList.add('elemento_caja_fondo');

    // Mostrar el contenido correspondiente al tipo seleccionado
    document.getElementById('contenido_' + tipo).style.display = 'block';
}