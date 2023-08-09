window.addEventListener("load", () => {
    toggleInfo();
    hanldeSessionStorage();
    closeInnerMenu();
    handleDataAttributes();
});

document.addEventListener("scroll", () => {
    handleParallax();
    handlePageLabel();
});
