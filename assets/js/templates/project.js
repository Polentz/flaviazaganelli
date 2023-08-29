window.addEventListener("load", () => {
    mouseMoveEffect();
    enlargeImages();
    galleryOnMobile();
    audioPlayer();
});

document.addEventListener("scroll", () => {
    handleSectionColor();
});