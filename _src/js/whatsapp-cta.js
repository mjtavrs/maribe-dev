const whatsAppCta = document.querySelector(".whatsapp-cta");
const ctaText = document.querySelector(".whatsapp-cta a p");
let lastScrollPosition = 0;

function handleScroll() {
    const currentScrollPosition = window.scrollY;

    if (currentScrollPosition > lastScrollPosition && currentScrollPosition > 100) {
        whatsAppCta.classList.add("mostrar");
        whatsAppCta.classList.contains("esconder") ? whatsAppCta.classList.remove("esconder") : ""
    } else if (currentScrollPosition < lastScrollPosition && currentScrollPosition < 100) {
        whatsAppCta.classList.contains("diminuir") ? whatsAppCta.classList.remove("diminuir") : ""
        whatsAppCta.classList.remove("mostrar");
        whatsAppCta.classList.add("esconder");
    }

    lastScrollPosition = currentScrollPosition;
}

whatsAppCta.addEventListener("mouseover", () => {
    whatsAppCta.classList.contains("diminuir") ? whatsAppCta.classList.remove("diminuir") : ""
    whatsAppCta.classList.add("aumentar");
    ctaText.classList.remove("hidden");
});

whatsAppCta.addEventListener("mouseout", () => {
    whatsAppCta.classList.remove("aumentar");
    whatsAppCta.classList.add("diminuir");
    ctaText.classList.add("hidden");
});

window.addEventListener("scroll", handleScroll);