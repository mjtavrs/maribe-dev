import projetos from "./data.js";

document.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const projetoId = parseInt(params.get("id"));

    const projeto = projetos.find(projeto => projeto.id === projetoId);
    document.title = `${projeto.titulo} | maribe arquitetura`;
    const projectContainer = document.getElementById("project-info");
    projectContainer.innerHTML = `
        <h1>${projeto.titulo}</h1>
        <h2>${projeto.cidade}, ${projeto.ano}</h2>
        <p>${projeto.descricao}</p>
    `;
    const projectPicturesContainer = document.getElementById("project-pictures");

    projeto.outrasFotos.forEach(foto => {
        const imageBox = document.createElement("div");
        const lightbox = document.createElement("a");
        lightbox.href = foto;
        lightbox.setAttribute("data-lightbox", "fotos");
        lightbox.setAttribute("data-title", `${projeto.titulo}`);
        const image = document.createElement("img");
        image.src = foto;
        image.alt = "Imagem de projeto da Maribe Arquitetura";
        image.title = `${projeto.titulo}`

        lightbox.appendChild(image);
        imageBox.appendChild(lightbox);
        projectPicturesContainer.appendChild(imageBox);
    })
})