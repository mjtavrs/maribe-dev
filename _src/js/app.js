document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener("error", (e) => {
        if (e && e.target && e.target.tagName === "img") {
            window.location.href = "404.html";
        }
    })
})
