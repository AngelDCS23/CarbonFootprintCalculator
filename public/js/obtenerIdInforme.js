function enviarDatos(nombre, año) {
    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch('/Obtener', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({
            nombre: nombre,
            año: año
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al enviar los datos: ' + response.statusText);
        }
        console.log("Datos enviados correctamente");
    })
    .catch(error => {
        console.error(error);
    });
}