// const handleScroll = () => {
//     window.addEventListener("wheel", (event) => {
//         event.preventDefault();
//         document.body.style.overflow = "hidden";
//         document.querySelector("main").scrollLeft += event.deltaY;
//     }, { passive: false });
// };

// handleScroll();

window.addEventListener("load", () => {
    closeInnerMenu();
    handleDataAttributes();
});

document.addEventListener("scroll", () => {
    handleParallax();
});