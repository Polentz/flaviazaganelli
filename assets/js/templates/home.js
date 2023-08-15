window.addEventListener("load", () => {
    mouseMoveEffect();
    toggleInfo();
    hanldeSessionStorage();
    handleDataAttributes();
    handleSectionColor();
});

document.addEventListener("scroll", () => {
    handleParallax();
    handlePageLabel();
    handleSectionColor();
});
