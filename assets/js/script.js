const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const toggleMenu = () => {
    const nav = document.querySelector(".nav");
    const navPage = document.querySelector(".nav-page");
    const navSite = document.querySelector(".nav-site");
    nav.addEventListener("mouseenter", () => {
        navPage.style.opacity = "0";
        setTimeout(() => {
            navPage.style.display = "none";
            navSite.classList.add("visible");
        }, 250);

    });
    nav.addEventListener("mouseleave", () => {
        navPage.style.display = "block";
        navPage.style.opacity = "1";
        navSite.classList.remove("visible");
    });
};

window.addEventListener("load", () => {
    documentHeight();
    toggleMenu();
});

window.addEventListener("resize", () => {
    documentHeight();
});
