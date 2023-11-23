function tocaSom(idAudio) {
    const audio = document.querySelector(idAudio);
    if (audio) {
        audio.currentTime = 0;
        audio.play();
    } else {
        console.error("Elemento de áudio não encontrado:", idAudio);
    }
}

const listaDeTeclas = document.querySelectorAll(".tecla");

for (const tecla of listaDeTeclas) {
    const efeito = tecla.classList[1];
    const idAudio = "#som_" + efeito;

    tecla.onclick = function() {
        tocaSom(idAudio);
    }
}