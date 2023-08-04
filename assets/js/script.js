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
    const nav = document.querySelector(".nav");
    const navPage = document.querySelector(".nav-page");
    const navSite = document.querySelector(".nav-site");
    nav.addEventListener("mouseenter", () => {
        navPage.style.opacity = "0";
        setTimeout(() => {
            navPage.style.display = "none";
            navSite.classList.add("show");
        }, 250);
    });
    nav.addEventListener("mouseleave", () => {
        navPage.style.display = "block";
        navPage.style.opacity = "1";
        navSite.classList.remove("show");
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
    uiClose.forEach(uiElement => {
        const container = uiElement.parentElement;
        uiElement.addEventListener("click", () => {
            if (container.classList.contains("open")) {
                container.classList.remove("open");
            };
            container.classList.add("close");
        });
    });
};

window.addEventListener("load", () => {
    documentHeight();
    handleAnchorTags();
    toggleMenu();
    toggleInfo();
    openELement("contact", ".contact");
    openELement("calendar", ".calendar");
    openELement("index", ".index");
    closeElement();
});

window.addEventListener("resize", () => {
    documentHeight();
});
