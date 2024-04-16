function cambiarImagen() {
    var imagen = document.querySelector('.banner2_90 img');
    if (imagen.src.includes("espana.png")) {
        imagen.src ='img/banderas/reino-unido.png';
    } else {
        imagen.src ='img/banderas/espana.png';
    }
}