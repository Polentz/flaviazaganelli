const handleScroll = () => {
    window.addEventListener("wheel", (event) => {
        event.preventDefault();
        document.body.style.overflow = "scroll hidden";
        document.body.scrollLeft += event.deltaY;
    }, { passive: false });
};

handleScroll();