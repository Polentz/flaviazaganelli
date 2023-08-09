const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
};

const handleAnchorTags = () => {
    const aTags = document.querySelectorAll(".js-href");
    aTags.forEach(a => {
        a.addEventListener("click", (e) => {
            e.preventDefault();
            const href = a.getAttribute("href");
            document.querySelector(href).scrollIntoView({
                behavior: "smooth"
            });
        });
    });
};

const toggleMenu = () => {
    const menu = document.querySelector(".menu");
    const pageTitle = document.querySelector(".page-title");
    const nav = document.querySelector(".nav");
    const navButtons = document.querySelectorAll(".nav-button");
    menu.addEventListener("mouseenter", () => {
        pageTitle.style.opacity = "0";
        setTimeout(() => {
            pageTitle.style.display = "none";
            nav.classList.add("show");
        }, 250);
    });
    navButtons.forEach(button => {
        button.addEventListener("click", () => {
            menu.classList.add("nav-visible");
        });
    });
    menu.addEventListener("mouseleave", () => {
        if (!menu.classList.contains("nav-visible")) {
            pageTitle.style.opacity = "1";
            setTimeout(() => {
                pageTitle.style.display = "block";
                nav.classList.remove("show");
            }, 250);
        };
    });
};

const toggleInfo = () => {
    const projects = document.querySelectorAll(".project");
    projects.forEach(project => {
        const title = project.querySelector(".project-wrapper");
        const info = project.querySelector(".project-info");
        const ui = project.querySelectorAll(".project-ui");
        title.addEventListener("mouseenter", () => {
            info.classList.add("info");
            ui.forEach(uiElement => {
                uiElement.classList.add("info");
            });
        });
        title.addEventListener("mouseleave", () => {
            info.classList.remove("info");
            ui.forEach(uiElement => {
                uiElement.classList.remove("info");
            });
        });
    });
};

const openELement = (button, container) => {
    document.getElementById(button).addEventListener("click", () => {
        document.querySelector(container).classList.add("open");
        if (document.querySelector(container).classList.contains("close")) {
            document.querySelector(container).classList.remove("close");
        };
    });
};

const closeElement = () => {
    const uiClose = document.querySelectorAll(".ui-close");
    const menu = document.querySelector(".menu");
    const pageTitle = document.querySelector(".page-title");
    const nav = document.querySelector(".nav");
    uiClose.forEach(uiElement => {
        const container = uiElement.parentElement;
        uiElement.addEventListener("click", () => {
            if (container.classList.contains("open")) {
                container.classList.remove("open");
            };
            container.classList.add("close");

            menu.classList.remove("nav-visible");
            pageTitle.style.opacity = "1";
            pageTitle.style.display = "block";
            nav.classList.remove("show");
        });
    });
};

const hanldeSessionStorage = () => {
    const initial = sessionStorage.getItem("initial");
    if (initial === "done") {
        const element = document.querySelector(".calendar");
        element.classList.add("close");
    } else {
        sessionStorage.setItem("initial", "done");
        window.addEventListener("load", () => {
            openELement("calendar", ".calendar");
        });
    };
};

const closeInnerMenu = () => {
    const menu = document.querySelector(".inner-menu")
    const menuElements = document.querySelectorAll(".inner-menu-list li a");
    menuElements.forEach(element => {
        element.addEventListener("click", () => {
            menu.classList.remove("open");
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
    const pageLabel = document.querySelector(".page-title h2");
    sections.forEach(section => {
        if (section.offsetTop - 200 <= pixelScrolled) {
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

const handleHorizontalScroll = () => {
    window.addEventListener("wheel", (event) => {
        event.preventDefault();
        document.querySelector(".content").scrollLeft += event.deltaY;
    }, { passive: false });
};

window.addEventListener("load", () => {
    documentHeight();
    handleAnchorTags();
    openELement("contact", ".contact");
    openELement("calendar", ".calendar");
    openELement("index", ".index");
    toggleMenu();
    closeElement();
});

window.addEventListener("resize", () => {
    documentHeight();
});
