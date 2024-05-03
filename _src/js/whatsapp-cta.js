const whatsAppCta = document.querySelector(".whatsapp-cta");
// const ctaText = document.querySelector(".whatsapp-cta a p");
const textContainer = document.querySelector(".text-container");
const iconContainer = document.querySelector(".icon-container");
let lastScrollPosition = 0;

function handleScroll() {
    const currentScrollPosition = window.scrollY;

    if (currentScrollPosition > lastScrollPosition && currentScrollPosition > 100) {
        whatsAppCta.classList.add("mostrar");
        whatsAppCta.classList.contains("esconder") ? whatsAppCta.classList.remove("esconder") : ""
    } else if (currentScrollPosition < lastScrollPosition && currentScrollPosition < 100) {
        whatsAppCta.classList.remove("mostrar");
        whatsAppCta.classList.add("esconder");
    }

    lastScrollPosition = currentScrollPosition;
}

whatsAppCta.addEventListener("mouseover", () => {
    iconContainer.classList.contains("slow-remove-border-radius") ? iconContainer.classList.remove("slow-remove-border-radius") : "";
    textContainer.classList.contains("unscale-in-right") ? textContainer.classList.remove("unscale-in-right") : "";
    textContainer.classList.remove("hidden");
    textContainer.classList.add("scale-in-right");
    iconContainer.classList.add("slow-border-radius");
    textContainer.classList.add("shown");
});

whatsAppCta.addEventListener("mouseout", () => {
    textContainer.classList.add("unscale-in-right");
    textContainer.classList.add("hidden");
    textContainer.classList.remove("shown");
    iconContainer.classList.add("slow-remove-border-radius");
    iconContainer.classList.remove("slow-border-radius");
});

window.addEventListener("scroll", handleScroll);