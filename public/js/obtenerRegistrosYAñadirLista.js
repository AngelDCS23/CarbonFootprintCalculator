function crearRegistro(){

    //Con esto obtengo el elemento.
    var tipo = document.getElementById('tipo');
    //Con esto obtengo el valor del elemento.
    var tipoSeleccionado = tipo.value;

    var subtipo = document.getElementById('subtipo');
    var subtipoSeleccionado = subtipo.value;

    var cantidad = document.getElementById('cantidadAña')
    var cantidadIntroducida = cantidad.value;

    //prueba de que funciona

    var contenedor = document.createElement('div');
    contenedor.classList.add('registro'); // Agregar una clase al contenedor si es necesario

    // Crear y agregar elementos de texto para mostrar los valores
    var tipoTexto = document.createTextNode('Tipo: ' + tipoSeleccionado);
    var subtipoTexto = document.createTextNode('Subtipo: ' + subtipoSeleccionado);
    var cantidadTexto = document.createTextNode('Cantidad: ' + cantidadIntroducida);

    // Agregar los textos al contenedor
    contenedor.appendChild(tipoTexto);
    contenedor.appendChild(document.createElement('br')); // Agregar un salto de línea entre cada valor
    contenedor.appendChild(subtipoTexto);
    contenedor.appendChild(document.createElement('br'));
    contenedor.appendChild(cantidadTexto);

    // Obtener el contenedor padre donde se insertará el nuevo contenedor
    var contenedorPadre = document.querySelector('.datos_usuario');

    // Insertar el nuevo contenedor dentro del contenedor padre
    contenedorPadre.appendChild(contenedor);
}