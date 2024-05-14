var radio = document.querySelector('.btn-manual');
var contador = 1;

document.getElementById('btn-slider1').checked = true;

setInterval(() => {
    NextImage()
}, 5000)

function NextImage() {
    contador++;
    if(contador > 3) {
        contador = 1;
    }

    document.getElementById('btn-slider'+contador).checked = true;
}