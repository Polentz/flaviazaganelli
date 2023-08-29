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
            document.querySelector(href).scrollIntoView({
                behavior: "smooth"
            });
        });
    });
};

const header = document.querySelector("header");
const menu = document.querySelector(".menu");
const pageTitle = document.querySelector(".page-title");
const pageLabel = document.querySelector(".page-title h2");
const mobileButton = document.querySelector(".mobile-ui");
const nav = document.querySelector(".nav");
const navButtons = document.querySelectorAll(".nav-button");
const sections = document.querySelectorAll(".project");
const uiClose = document.querySelectorAll(".ui-close");
const mediaQuery = window.matchMedia("(max-width: 720px)");

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
        });
    });
};

const handlePageLabel = () => {
    const pixelScrolled = window.scrollY;
    sections.forEach(section => {
        if (section.offsetTop - 200 <= pixelScrolled) {
            pageLabel.style.animation = "opacity .35s ease 1";
            pageLabel.innerHTML = section.getAttribute("data-section-title");
        };
        if (window.scrollY == 0) {
            pageLabel.style.animation = "none";
            const handleMediaQuery = (e) => {
                if (e.matches) {
                    setTimeout(() => {
                        pageLabel.innerHTML = "";
                    }, 350);
                } else {
                    setTimeout(() => {
                        pageLabel.innerHTML = "+";
                    }, 350);
                };
            };
            mediaQuery.addListener(handleMediaQuery);
            handleMediaQuery(mediaQuery);
        };
    });
    // const handleMediaQuery = (e) => {
    //     if (e.matches) {
    //         sections.forEach(section => {
    //             if (section.offsetTop - 200 <= pixelScrolled) {
    //                 pageLabel.style.animation = "opacity .35s ease 1";
    //                 pageLabel.innerHTML = section.getAttribute("data-section-title");
    //             };
    //             if (window.scrollY == 0) {
    //                 pageLabel.style.animation = "none";
    //                 setTimeout(() => {
    //                     pageLabel.innerHTML = "";
    //                 }, 350);
    //             };
    //         });
    //     } else {
    //         sections.forEach(section => {
    //             if (section.offsetTop - 200 <= pixelScrolled) {
    //                 pageLabel.style.animation = "opacity .35s ease 1";
    //                 pageLabel.innerHTML = section.getAttribute("data-section-title");
    //             };
    //             if (window.scrollY == 0) {
    //                 pageLabel.style.animation = "none";
    //                 setTimeout(() => {
    //                     pageLabel.innerHTML = "+";
    //                 }, 350);
    //             };
    //         });
    //     };
    // };

    // mediaQuery.addListener(handleMediaQuery);
    // handleMediaQuery(mediaQuery);
};

const handleSectionColor = () => {
    const pixelScrolled = window.scrollY;
    const svg = document.querySelector(".background svg");
    const elements = document.querySelectorAll("[data-section-color]")
    elements.forEach(element => {
        if (element.offsetTop - 250 <= pixelScrolled) {
            const color = element.getAttribute("data-section-color");
            svg.style.fill = `${color}`;
            const doc = document.documentElement;
            doc.style.setProperty("--color-acc", `${color}`);
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

const audioPlayer = () => {
    const audioComponent = document.querySelectorAll(".audio-component");
    const playBtns = document.querySelectorAll(".play-btn");
    audioComponent.forEach(component => {
        playBtns.forEach(btn => {
            if (btn.parentNode.parentNode === component) {
                const audioPlayerContainer = component.querySelector(".audio-player");
                const seekSlider = component.querySelector(".seek-slider");
                const audio = component.querySelector("audio");
                const stopBtn = component.querySelector(".stop-btn");
                const playIcon = component.querySelector(".play-icon");
                const pauseIcon = component.querySelector(".pause-icon");
                const stopIcon = component.querySelector(".stop-icon");
                const volumeIcon = component.querySelector(".volume-icon");
                const muteIcon = component.querySelector(".mute-icon");
                const durationContainer = component.querySelector(".audio-duration");
                const currentTimeContainer = component.querySelector(".audio-progress");
                const volumeContainer = component.querySelector(".audio-volume");
                let raf = null;

                btn.addEventListener("click", () => {
                    if (audio.paused) {
                        audio.play();
                        requestAnimationFrame(whilePlaying);
                    } else {
                        audio.pause();
                        cancelAnimationFrame(raf);
                    };
                    playIcon.classList.toggle("toggle-play");
                    pauseIcon.classList.toggle("toggle-play");
                    stopIcon.classList.add("toggle-play");
                });

                stopBtn.addEventListener("click", () => {
                    stopAudio();
                });

                audio.addEventListener("timeupdate", () => {
                    if (audio.duration === audio.currentTime) {
                        stopAudio();
                    };
                });

                volumeContainer.addEventListener("click", () => {
                    controlVolume();
                })

                const controlVolume = () => {
                    if (audio.volume > 0) {
                        audio.volume = 0;
                        volumeIcon.classList.add("toggle-volume");
                        muteIcon.classList.add("toggle-volume");
                    } else {
                        audio.volume = 1;
                        volumeIcon.classList.remove("toggle-volume");
                        muteIcon.classList.remove("toggle-volume");
                    }
                }

                const stopAudio = () => {
                    audio.pause();
                    audio.currentTime = 0;
                    playIcon.classList.remove("toggle-play");
                    pauseIcon.classList.remove("toggle-play");
                    stopIcon.classList.remove("toggle-play");
                };

                const showRangeProgress = (rangeInput) => {
                    audioPlayerContainer.style.setProperty("--seek-before-width", rangeInput.value / rangeInput.max * 100 + "%");
                };

                seekSlider.addEventListener("input", (e) => {
                    showRangeProgress(e.target);
                });

                const calculateTime = (sec) => {
                    let minutes = Math.floor(sec / 60);
                    let seconds = Math.floor(sec - minutes * 60);
                    if (seconds < 10) {
                        seconds = `0${seconds}`;
                    }
                    return `${minutes}:${seconds}`;
                };

                const displayDuration = () => {
                    durationContainer.textContent = calculateTime(audio.duration);
                };

                const setSliderMax = () => {
                    seekSlider.max = Math.floor(audio.duration);
                };

                const whilePlaying = () => {
                    seekSlider.value = Math.floor(audio.currentTime);
                    currentTimeContainer.textContent = calculateTime(seekSlider.value);
                    audioPlayerContainer.style.setProperty("--seek-before-width", `${seekSlider.value / seekSlider.max * 100}%`);
                    raf = requestAnimationFrame(whilePlaying);
                };

                if (audio.readyState > 0) {
                    displayDuration();
                    setSliderMax();
                }

                audio.addEventListener("playing", () => {
                    displayDuration();
                    setSliderMax();
                });

                seekSlider.addEventListener("input", () => {
                    currentTimeContainer.textContent = calculateTime(seekSlider.value);
                    if (!audio.paused) {
                        cancelAnimationFrame(raf);
                    };
                });

                seekSlider.addEventListener("change", () => {
                    audio.currentTime = seekSlider.value;
                    if (!audio.paused) {
                        requestAnimationFrame(whilePlaying);
                    }
                });
            };
        });
    });

    const buttonsClose = document.querySelectorAll(".subpage .popup-ui");
    const audios = document.querySelectorAll("audio");
    buttonsClose.forEach(button => {
        button.addEventListener("click", () => {
            audios.forEach(audio => {
                if (audio.play) {
                    audio.pause();
                };
            });
        });
    });
};

const mouseMoveEffect = () => {
    const background = document.querySelector(".background")
    document.addEventListener("mousemove", (event) => {
        let x = event.pageX;
        let xDecimal = x * 0.02;
        background.style.filter = `hue-rotate(${xDecimal}deg)`;
    });
};

const toggleNav = () => {
    const handleMediaQuery = (e) => {
        if (e.matches) {
            mobileButton.addEventListener("click", () => {
                header.classList.toggle("add-backdrop")
                mobileButton.classList.toggle("rotate");
                pageTitle.classList.toggle("hide")
                nav.classList.toggle("show");
            });
            uiClose.forEach(uiElement => {
                uiElement.addEventListener("click", () => {
                    if (nav.classList.contains("show")) {
                        header.classList.remove("add-backdrop")
                        mobileButton.classList.remove("rotate");
                        pageTitle.classList.remove("hide")
                        nav.classList.remove("show");
                    }
                });
            });

        } else {
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
    };

    mediaQuery.addListener(handleMediaQuery);
    handleMediaQuery(mediaQuery);
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

const openPopupElement = () => {
    const buttons = document.querySelectorAll(".nav-button, .buttton-special");
    const popupElements = document.querySelectorAll(".popup, .inner-menu, .subpage");
    buttons.forEach(button => {
        button.addEventListener("click", () => {
            popupElements.forEach(element => {
                if (element.classList.contains(button.id)) {
                    element.classList.add("open");
                    if (element.classList.contains("close")) {
                        element.classList.remove("close");
                    };
                } else {
                    const handleMediaQuery = (e) => {
                        if (e.matches) {
                            element.classList.remove("open");
                            element.classList.add("close");
                        };
                    };
                    mediaQuery.addListener(handleMediaQuery);
                    handleMediaQuery(mediaQuery);
                };
            });
            const handleMediaQuery = (e) => {
                if (e.matches) {
                    if (nav.classList.contains("show")) {
                        header.classList.remove("add-backdrop")
                        mobileButton.classList.remove("rotate");
                        pageTitle.classList.remove("hide")
                        nav.classList.remove("show");
                    }
                };
            };
            mediaQuery.addListener(handleMediaQuery);
            handleMediaQuery(mediaQuery);
        });
    });
};

const closePopupElement = () => {
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
            if (header.classList.contains("add-backdrop")) {
                header.classList.remove("add-backdrop")
                mobileButton.classList.remove("rotate");
                pageTitle.classList.remove("hide");
                nav.classList.remove("show");
            };
        });
    });
};

const galleryOnMobile = () => {
    const galleryNodeList = document.querySelectorAll(".gallery-grid-item");
    const button = document.querySelector(".gallery-button");
    let galleryArray = Array.from(galleryNodeList);
    if (galleryNodeList.length > 4) {
        const newArray = galleryArray.slice(0, 4);
        newArray.forEach(item => {
            item.classList.add("visible-on-mobile");
        });
        galleryNodeList.forEach(item => {
            if (!item.classList.contains("visible-on-mobile")) {
                item.classList.add("hide-on-mobile");
            };
        });
        const buttonSvg = document.querySelector(".gallery-button svg");
        button.addEventListener("click", () => {
            galleryNodeList.forEach(item => {
                if (item.classList.contains("hide-on-mobile")) {
                    buttonSvg.style.transform = "rotate(45deg)"
                    setTimeout(() => {
                        item.classList.remove("hide-on-mobile");
                    }, 250);
                } else if (!item.classList.contains("visible-on-mobile")) {
                    buttonSvg.style.transform = "rotate(0deg)"
                    setTimeout(() => {
                        item.classList.add("hide-on-mobile");
                        window.scrollTo(0, 0);
                    }, 250);
                };
            });
        });
    } else {
        button.style.display = "none";
    };
};

window.addEventListener("load", () => {
    documentHeight();
    handleAnchorTags();
    openPopupElement();
    toggleNav();
    closePopupElement();
    closeIndexMenu();
});

window.addEventListener("resize", () => {
    documentHeight();
});
