window.addEventListener("load", () => {
    mouseMoveEffect();
    toggleInfo();
    hanldeSessionStorage();
    handleDataAttributes();
    handleSectionColor();
    const handleMediaQuery = (e) => {
        const calendar = document.querySelector(".calendar");
        if (e.matches) {
            pageLabel.innerHTML = "";
            calendar.classList.add("close");
        } else {
            pageLabel.innerHTML = "+";
        };
    };
    mediaQuery.addListener(handleMediaQuery);
    handleMediaQuery(mediaQuery);
});

document.addEventListener("scroll", () => {
    handleParallax();
    handlePageLabel();
    handleSectionColor();
});
