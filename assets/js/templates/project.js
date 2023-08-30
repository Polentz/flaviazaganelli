window.addEventListener("load", () => {
    handleSectionsColor();
    mouseMoveEffect();
    enlargeGalleryItem();
    galleryOnMobile();
    audioPlayer();
});

document.addEventListener("scroll", () => {
    handleSectionsColor();
});