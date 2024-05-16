function CrearRegistroIndi(){

    var tipoIndi = document.getElementById('emiIndi');
    var tipoIndiSelect = tipoIndi.value;

    var cantidadEmi = document.getElementById('cantidadEmiIndi');
    var cantidadEmiSelect = cantidadEmi.value;

    var unidadEmi = document.getElementById('unidadIndi');
    var unidadEmiSelect = unidadEmi.value;

    var contenedorEmiIndi = document.createElement('div');
    contenedorEmiIndi.classList.add('datos_añadidos');

    var tipTexto = document.createTextNode(tipoIndiSelect);
    var canTexto = document.createTextNode(cantidadEmiSelect);
    var uniTexto = document.createTextNode(unidadEmiSelect);

    var contenedorTipIndi = document.createElement('p');
    contenedorTipIndi.appendChild(tipTexto);
    contenedorEmiIndi.appendChild(contenedorTipIndi);

    var contenedorUnidadEmi = document.createElement('p');
    contenedorUnidadEmi.appendChild(canTexto);
    contenedorEmiIndi.appendChild(contenedorUnidadEmi);

    var contenedorUnidadEmi = document.createElement('p');
    contenedorUnidadEmi.appendChild(uniTexto);
    contenedorEmiIndi.appendChild(contenedorUnidadEmi);

    var contenedorPadreEmi = document.querySelector('.datos_usuario2');
    contenedorPadreEmi.appendChild(contenedorEmiIndi);

    var datos = {
        tipoIndi: tipTexto.nodeValue,
        cantidadEmi: canTexto.nodeValue,
    }

    var CuerpoSoli = JSON.stringify(datos);

    fetch('/guardarEmiIndirect', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: CuerpoSoli
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        // Manejo de la respuesta si es necesario
    })
    .catch(error => {
        console.error('Error en la solicitud fetch:', error);
        // Manejo del error
    });
}