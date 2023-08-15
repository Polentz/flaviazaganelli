window.addEventListener("load", () => {
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
