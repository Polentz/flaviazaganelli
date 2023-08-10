window.addEventListener("load", () => {
    toggleInfo();
    hanldeSessionStorage();
    closeInnerMenu();
    handleDataAttributes();
    handleSectionColor();
});

document.addEventListener("scroll", () => {
    handleParallax();
    handlePageLabel();
    handleSectionColor();
});
