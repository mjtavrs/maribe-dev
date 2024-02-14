document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener("error", (e) => {
        if (e && e.target && e.target.tagName === "img") {
            window.location.href = "404.html";
        }
    });

    // if (window.location.pathname.endsWith(".html")) {
    //     const newPath = window.location.pathname.slice(0, -5);
    //     history.pushState({}, "", newPath);
    // }
})
