import projetos from "./data.js";

document.addEventListener("DOMContentLoaded", () => {
    const projectsContainer = document.getElementById("projects");

    projetos.forEach(projeto => {
        const article = document.createElement("article");
        const link = document.createElement("a");
        link.href = "#"

        const img = document.createElement("img");
        img.src = projeto.url;
        img.alt = "Testando";

        const span = document.createElement("span");
        span.classList.add("visibilityOff");

        const h4 = document.createElement("h4");
        h4.textContent = projeto.titulo;

        span.appendChild(h4);
        link.appendChild(img);
        link.appendChild(span);
        article.appendChild(link);

        projectsContainer.appendChild(article);
    });
});