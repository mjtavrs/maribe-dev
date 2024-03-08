function iniciarReproducao() {
    let video = document.getElementById("video_logo");
    video.play();

    let interacao = document.getElementById("interacao-ios");
    interacao.parentNode.removeChild(interacao);
}

document.getElementById("interacao").addEventListener("click", iniciarReproducao);