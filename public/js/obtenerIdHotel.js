function enviarIdHotel(id){
    console.log("(DESDE JAVASCRIPT)ID del hotel:", id);
    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch('/ObtenerHotel', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({
            id: id
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