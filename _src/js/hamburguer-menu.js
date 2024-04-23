const hamburguerMenuButton = document.querySelector(".lines-container");
const linesChildren = document.querySelectorAll(".lines-container .menu_line");

const hamburguerMenuItens = document.querySelector(".hamburguer-menu");
const closeButton = document.querySelector(".close-menu");

hamburguerMenuButton.addEventListener("click", () => {

    closeButton.classList.remove("scale-in-center");
    closeButton.classList.remove("scale-out-center");

    // Muda a cor caso seja clicado
    hamburguerMenuButton.classList.toggle("menu-opened");

    //Lógica envolvida em mostrar/esconder as coisas
    if (hamburguerMenuItens.classList.contains("scale-in-center")) {
        hamburguerMenuItens.classList.toggle("scale-out-center");
        closeButton.classList.remove("show-close-button");
        closeButton.classList.add("close-menu");
        setTimeout(() => {
            linesChildren.forEach(child => {
                child.classList.remove("scale-out-center");
                child.classList.remove("toggle-visibility");
                child.classList.add("scale-in-center");
            });
        }, 200);
        setTimeout(() => {
            closeButton.classList.add("scale-out-center");
            hamburguerMenuItens.classList.toggle("toggle-visibility");
        }, 200);
        setTimeout(() => {
            closeButton.classList.add("toggle-visibility");
        }, 200);
        // Removendo classes que são desnecessárias nesse momento
        hamburguerMenuItens.classList.remove("scale-in-center");
        hamburguerMenuItens.classList.remove("scale-out-center");
        closeButton.classList.remove("scale-in-center");
        closeButton.classList.remove("scale-out-center");
    } else {
        // Retira o display none para mostrar
        hamburguerMenuItens.classList.toggle("toggle-visibility");
        // Faz a entrada animada
        hamburguerMenuItens.classList.toggle("scale-in-center");
        // Cada uma das linhas é eliminada em forma animada e recebem display none
        linesChildren.forEach(child => {
            child.classList.add("scale-out-center");
        });
        setTimeout(() => {
            linesChildren.forEach(child => {
                child.classList.add("toggle-visibility");
            });
        }, 100);
        setTimeout(() => {
            closeButton.classList.remove("toggle-visibility");
            closeButton.classList.remove("close-menu");
            closeButton.classList.add("show-close-button");
            closeButton.classList.add("scale-in-center");
        }, 100);
    }
});