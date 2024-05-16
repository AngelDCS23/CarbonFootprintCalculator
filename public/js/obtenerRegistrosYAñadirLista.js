function crearRegistro(){

    //Con esto obtengo el elemento.
    var tipo = document.getElementById('tipo');
    //Con esto obtengo el valor del elemento.
    var tipoSeleccionado = tipo.value;

    var subtipo = document.getElementById('subtipo');
    var subtipoSeleccionado = subtipo.value;

    var unidad = document.getElementById('unidadAña').value;
    var cantidad = document.getElementById('cantidadAña').value;
    //prueba de que funciona

    var contenedor = document.createElement('div');
    contenedor.classList.add('datos_añadidos'); // Agregar una clase al contenedor si es necesario

    // Crear y agregar elementos de texto para mostrar los valores
    var tipoTexto = document.createTextNode(tipoSeleccionado);
    var subtipoTexto = document.createTextNode(subtipoSeleccionado);
    var cantidadTexto = document.createTextNode(cantidad);
    var unidadTexto = document.createTextNode(unidad);

    // Agregar los textos (p) al contenedor
    var contenedorTipo = document.createElement('p');
    contenedorTipo.appendChild(tipoTexto);
    contenedor.appendChild(contenedorTipo);

    var contenedorSubtipo = document.createElement('p');
    contenedorSubtipo.appendChild(subtipoTexto);
    contenedor.appendChild(contenedorSubtipo);

    var contenedorCantidad = document.createElement('p');
    contenedorCantidad.appendChild(cantidadTexto);
    contenedor.appendChild(contenedorCantidad);

    var contenidoUnidad = document.createElement('p');
    contenidoUnidad.appendChild(unidadTexto);
    contenedor.appendChild(contenidoUnidad);


    // Obtener el contenedor padre donde se insertará el nuevo contenedor
    var contenedorPadre = document.querySelector('.datos_usuario');

    // Insertar el nuevo contenedor dentro del contenedor padre
    contenedorPadre.appendChild(contenedor);
    
    var datos = {
        tipo: tipoTexto.nodeValue,
        subtipo: subtipoTexto.nodeValue,
        cantidad: cantidadTexto.nodeValue,
    }

    var CuerpoSolicitud = JSON.stringify(datos);

    fetch('/envioEmiDirectas',{
        method: 'POST',
        headers:{
            'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: CuerpoSolicitud
    });
}