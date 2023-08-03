const closeInnerMenu = () => {
    const menu = document.querySelector(".inner-menu")
    const menuElements = document.querySelectorAll(".inner-menu-list li a");
    menuElements.forEach(element => {
        element.addEventListener("click", () => {
            menu.classList.add("close");
        });
    });
};

const handleDataAttributes = () => {
    const imagesGrid = document.querySelectorAll(".project-grid");
    imagesGrid.forEach(grid => {
        const images = grid.querySelectorAll(".project-grid-item");
        for (let i = 0; i < images.length; i++) {
            images[0].dataset.parallax = -0.2;
            images[1].dataset.parallax = -0.1;
            images[2].dataset.parallax = 0.1;
            images[3].dataset.parallax = 0.2;
        };
    });
};

const handleParallax = () => {
    const sections = document.querySelectorAll(".project");
    const topViewport = window.pageYOffset;
    const midViewport = topViewport + (window.innerHeight / 2);
    sections.forEach(section => {
        const midSection = section.offsetTop + (section.offsetHeight / 2);
        const distanceToSection = midViewport - midSection;
        const parallaxTags = section.querySelectorAll("[data-parallax]");
        parallaxTags.forEach(tag => {
            const ratio = parseFloat(tag.getAttribute("data-parallax"));
            const weightedDistance = distanceToSection * ratio;
            tag.style.transform = `translate(0, ${weightedDistance}px)`;
        });
    });
};

const handlePageLabel = () => {
    const pixelScrolled = window.scrollY;
    const sections = document.querySelectorAll(".project");
    const pageLabel = document.querySelector(".nav-page h2");
    sections.forEach(section => {
        if (section.offsetTop - 50 <= pixelScrolled) {
            pageLabel.style.opacity = "1";
            pageLabel.innerHTML = section.getAttribute("data-section-title");
        };
        if (window.scrollY == 0) {
            pageLabel.style.opacity = "0";
            setTimeout(() => {
                pageLabel.innerHTML = "";
            }, 350);
        };
    });
};

window.addEventListener("load", () => {
    openELement("index", ".index");
    closeInnerMenu();
    handleDataAttributes();
});

document.addEventListener("scroll", () => {
    handleParallax();
    handlePageLabel();
});
