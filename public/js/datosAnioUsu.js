function registrosAnioUsu(){
    fetch('/registroEmiAnio')
    .then(response => response.json())
    .then(data =>{
        console.log('aaaasaasasasasasaasasas');
        console.log(data);
    });
}

//TENGO QUE AÑADIR LOS REGISTROS A LAS TABLAS CORRESPONDIENTES EN LA MISMA FUNCIÓN, SUERTE <3


    document.addEventListener('DOMContentLoaded', () => {
        registrosAnioUsu();
    });
    
