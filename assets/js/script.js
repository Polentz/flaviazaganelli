console.log(
    '%cDesign & Code: Giulia Polenta https://www.iampolenta.com/',
    'color: #4c00ff; font-family: sans-serif; font-size: .75rem;'
);

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
            document.querySelector(href).scrollIntoView();
        });
    });
};

const menu = document.querySelector(".menu");
const pageTitle = document.querySelector(".page-title");
const nav = document.querySelector(".nav");
const navButtons = document.querySelectorAll(".nav-button");
const sections = document.querySelectorAll(".project");

const hanldeSessionStorage = () => {
    const initial = sessionStorage.getItem("initial");
    if (initial === "done") {
        const element = document.querySelector(".calendar");
        if (element) {
            element.classList.add("close");
        }
    } else {
        sessionStorage.setItem("initial", "done");
        window.addEventListener("load", () => {
            openPopupElement("calendar", ".calendar");
        });
    };
};

const handleDataAttributes = () => {
    const imagesGrid = document.querySelectorAll(".gallery-grid");
    imagesGrid.forEach(grid => {
        const images = grid.querySelectorAll(".gallery-grid-item");
        let coefficient = 4 / (images.length - 1) * 0.1
        let parallax = -0.2;
        for (let i = 0; i < images.length; i++) {
            images[i].dataset.parallax = parallax.toFixed(3);
            parallax += coefficient;
        };
    });
};

const handleParallax = () => {
    const topViewport = window.scrollY;
    const midViewport = topViewport + (window.innerHeight / 2);
    sections.forEach(section => {
        const midSection = section.offsetTop + (section.offsetHeight / 2);
        const distanceToSection = midViewport - midSection;
        const parallaxTags = section.querySelectorAll("[data-parallax]");
        parallaxTags.forEach(tag => {
            const ratio = tag.getAttribute("data-parallax");
            const weightedDistance = distanceToSection * ratio;
            tag.style.transform = `translate(0px, ${weightedDistance}px)`;
            if (window.scrollY == 0) {
                tag.style.transform = `translate(0px, 0px)`;
            }
        });
    });
};

const handlePageLabel = () => {
    const pixelScrolled = window.scrollY;
    const pageLabel = document.querySelector(".page-title h2");
    sections.forEach(section => {
        if (section.offsetTop - 200 <= pixelScrolled) {
            pageLabel.style.animation = "opacity .35s ease 1";
            pageLabel.innerHTML = section.getAttribute("data-section-title");
        };
        if (window.scrollY == 0) {
            pageLabel.style.animation = "none";
            setTimeout(() => {
                pageLabel.innerHTML = "+";
            }, 350);
        };
    });
};

const handleSectionColor = () => {
    const pixelScrolled = window.scrollY;
    const circles = document.querySelectorAll("circle");
    const elements = document.querySelectorAll("[data-section-color]")
    elements.forEach(element => {
        if (element.offsetTop - 250 <= pixelScrolled) {
            const color = element.getAttribute("data-section-color");
            circles.forEach(circle => {
                circle.style.fill = `${color}`;
            });
        };
    });
};

const enlargeImages = () => {
    const images = document.querySelectorAll(".gallery-grid-item");
    images.forEach(img => {
        img.addEventListener("click", () => {
            img.classList.toggle("enlarge");
        });
    });
};

const mouseMoveEffect = () => {
    const background = document.querySelector(".background svg")
    document.addEventListener("mousemove", (event) => {
        let x = event.pageX;
        let y = event.pageY;
        let xDecimal = x * 0.15;
        let yDecimal = y * 0.15;
        background.style.transform = `translate(${xDecimal}px, ${yDecimal}px) skew(${(yDecimal * 0.2)}deg)`;
    });
};

const toggleNav = () => {
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

const hideNav = () => {
    menu.classList.remove("nav-visible");
    pageTitle.style.opacity = "1";
    pageTitle.style.display = "block";
    nav.classList.remove("show");
};

const toggleInfo = () => {
    sections.forEach(project => {
        const title = project.querySelector(".project-wrapper");
        const info = project.querySelector(".project-info");
        const ui = project.querySelectorAll(".project-ui");
        title.addEventListener("mouseenter", () => {
            if (info) {
                info.classList.add("info");
            };
            ui.forEach(uiElement => {
                uiElement.classList.add("info");
            });
        });
        title.addEventListener("mouseleave", () => {
            if (info) {
                info.classList.remove("info");
            };
            ui.forEach(uiElement => {
                uiElement.classList.remove("info");
            });
        });
    });
};

const openPopupElement = (button, container) => {
    if (document.getElementById(button)) {
        document.getElementById(button).addEventListener("click", () => {
            document.querySelector(container).classList.add("open");
            if (document.querySelector(container).classList.contains("close")) {
                document.querySelector(container).classList.remove("close");
            };
        });
    };
};

const closePopupElement = () => {
    const uiClose = document.querySelectorAll(".ui-close");
    uiClose.forEach(uiElement => {
        const container = uiElement.parentElement;
        uiElement.addEventListener("click", () => {
            if (container.classList.contains("open")) {
                container.classList.remove("open");
            };
            container.classList.add("close");
            hideNav();
        });
    });
};

const closeIndexMenu = () => {
    const innerMenu = document.querySelector(".inner-menu")
    const menuElements = document.querySelectorAll(".inner-menu-list li a");
    menuElements.forEach(element => {
        element.addEventListener("click", () => {
            innerMenu.classList.remove("open");
            innerMenu.classList.add("close");
            hideNav();
        });
    });
};

window.addEventListener("load", () => {
    documentHeight();
    handleAnchorTags();
    openPopupElement("contact", ".contact");
    openPopupElement("calendar", ".calendar");
    openPopupElement("index", ".index");
    toggleNav();
    closePopupElement();
    closeIndexMenu();
});

window.addEventListener("resize", () => {
    documentHeight();
});
