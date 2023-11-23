function tocaSom(idEleemtoAudio){
    document.querySelector(idEleemtoAudio).play();
}

let lista=document.querySelectorAll(".tecla");

let (contador<lista.length)
    const efeito = lista[contador].classList[1];
    const idAudio = "#som_"+efeito;
    lista[contador].onclick = function(){
        tocaSom(idAudio);
    }
    contador++;
