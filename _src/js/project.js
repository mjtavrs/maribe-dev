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
        const image = document.createElement("img");
        image.src = foto;
        image.alt = "teste";

        imageBox.appendChild(image);
        projectPicturesContainer.appendChild(imageBox);
    })
})