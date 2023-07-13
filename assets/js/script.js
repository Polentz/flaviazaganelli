const documentHeight = () => {
    const doc = document.documentElement;
    doc.style.setProperty("--doc-height", `${window.innerHeight}px`);
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
        console.log(ui)
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

}

const togglePopup = () => {
    const popupClose = document.querySelectorAll(".popup-close");
    popupClose.forEach(close => {
        close.addEventListener("click", () => {
            const popup = close.parentElement;
            popup.classList.add("hide");
        });
    });
};

window.addEventListener("load", () => {
    documentHeight();
    toggleMenu();
    togglePopup();
    toggleInfo();
});

window.addEventListener("resize", () => {
    documentHeight();
});
