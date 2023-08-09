window.addEventListener("load", () => {
    closeInnerMenu();
    // handleDataAttributes();
    handleHorizontalScroll();
});

document.addEventListener("scroll", () => {
    handleParallax();
});