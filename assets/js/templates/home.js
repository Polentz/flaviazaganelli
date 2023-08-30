window.addEventListener("load", () => {
    mouseMoveEffect();
    toggleInfo();
    hanldeSessionStorage();
    handleDataAttributes();
    handleSectionsColor();
    calendarOnMobile();
});

document.addEventListener("scroll", () => {
    handleParallax();
    handlePageLabel();
    handleSectionsColor();
});
