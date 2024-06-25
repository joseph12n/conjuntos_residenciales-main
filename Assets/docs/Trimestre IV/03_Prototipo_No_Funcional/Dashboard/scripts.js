const imagenes = document.querySelectorAll('.carrusel img');
const anteriorBtn = document.querySelector('.anterior');
const siguienteBtn = document.querySelector('.siguiente');
let indiceImagenActual = 0;

function mostrarImagen() {
    imagenes.forEach((img, idx) => img.style.display = idx === indiceImagenActual ? 'block' : 'none');
}

function avanzarImagen() {
    indiceImagenActual++;
    if (indiceImagenActual >= imagenes.length) indiceImagenActual = 0;
    mostrarImagen();
}

function retrocederImagen() {
    indiceImagenActual--;
    if (indiceImagenActual < 0) indiceImagenActual = imagenes.length - 1;
    mostrarImagen();
}

siguienteBtn.addEventListener('click', avanzarImagen);
anteriorBtn.addEventListener('click', retrocederImagen);

// Iniciar carrusel automático (cada 3 segundos)
setInterval(avanzarImagen, 3000); 

mostrarImagen(); // Mostrar la primera imagen al cargar
