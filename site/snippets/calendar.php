<?php if($site->calendarBlocks()->isNotEmpty()) : ?>
    <?php if ($page->is('home')) : ?>
        <section class="popup calendar open">
    <?php else : ?>
        <section class="popup calendar close">
    <?php endif ?>
        <div class="popup-ui ui-close right">
            <svg viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.6646 1.91026L24.3291 24.2548M24.3291 24.2548L1.42822 47.1651M24.3291 24.2548L1.42822 1.34457M24.3291 24.2548L46.6646 46.5994"/>
            </svg>
        </div>
        <div class="popup-wrapper">
            <div class="popup-title">
                <h3><?= $site->calendarHeader() ?></h3>
            </div>
            <?php foreach ($site->calendarBlocks()->toBlocks() as $block): ?>
                <div class="popup-list">
                    <?= $block ?>
                </div>
            <?php endforeach ?>
        </div>
    </section>
<?php endif ?>