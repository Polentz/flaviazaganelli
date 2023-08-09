<?php if ($page->is('home')) : ?>
    <section class="popup calendar">
        <div class="popup-ui ui-close right">
            <svg viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.6646 1.91026L24.3291 24.2548M24.3291 24.2548L1.42822 47.1651M24.3291 24.2548L1.42822 1.34457M24.3291 24.2548L46.6646 46.5994" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="popup-wrapper">
            <div class="popup-title">
                <h3>What's Next</h3>
            </div>
            <div class="popup-list">
                <p>01-02/07/2023</p>
                <p>electrica /ecosi'stɛma/</p>
                <p>Where?</p>
                <p>What?</p>
            </div>
        </div>
    </section>
<?php else : ?>
    <section class="popup calendar close">
        <div class="popup-ui ui-close right">
            <svg viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.6646 1.91026L24.3291 24.2548M24.3291 24.2548L1.42822 47.1651M24.3291 24.2548L1.42822 1.34457M24.3291 24.2548L46.6646 46.5994" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="popup-wrapper">
            <div class="popup-title">
                <h3>What's Next</h3>
            </div>
            <div class="popup-list">
                <p>01-02/07/2023</p>
                <p>electrica /ecosi'stɛma/</p>
                <p>Where?</p>
                <p>What?</p>
            </div>
        </div>
    </section>
<?php endif ?>