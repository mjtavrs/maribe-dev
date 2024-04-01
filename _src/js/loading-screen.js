document.addEventListener("DOMContentLoaded", () => {
    let loadingGif = document.getElementById("loading-gif");
    let minDisplayTime = 1900; // Tempo mínimo de exibição do GIF em milissegundos

    // Exibe o GIF de carregamento
    loadingGif.classList.add("active");

    // Oculta o GIF de carregamento após o tempo mínimo de exibição
    setTimeout(() => {
        loadingGif.classList.remove("active");
    }, minDisplayTime);
});