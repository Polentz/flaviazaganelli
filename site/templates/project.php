<?php
    if ($kirby->language()->code() == 'it') {
        $paginationTextNext = 'Progetto successivo:';
        $paginationTextPrev = 'Progetto precedente:';
    } else if ($kirby->language()->code() == 'en') {
        $paginationTextNext = 'Next project:';
        $paginationTextPrev = 'Previous project:';
    }
?>
<?= snippet('header') ?>
<main class="content-wrapper">
    <section class="project" data-section-color="<?= $page->color() ?>">
        <div class="gallery-grid">
            <?php foreach ($page->gallery()->toFiles() as $image) : ?>
                <div class="gallery-grid-item">
                    <img src="<?= $image->resize(1200, null)->url() ?>">
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="page-copy">
        <div class="main-text">
            <?= $page->maintext()->kt() ?>
            <?php if($page->customBlocks()->isNotEmpty()) : ?>
                <div class="buttons">
                    <?php foreach ($page->customBlocks()->toBlocks() as $block): ?>
                        <div class="button-wrapper">
                            <button class="button">
                                <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.852804 1L16.4577 1M16.4577 1L16.6553 17M16.4577 1L0.655273 17"/>
                                </svg>
                                <?= $block ?>
                            </button>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
        <?php if($page->credits()->isNotEmpty()) : ?>
            <div class="secondary-text">
                <?= $page->credits()->kt() ?>     
            </div>
        <?php endif ?>
    </section>
</main>

<?php if ($page->hasNextListed() && $page->nextListed()->pagestatus()->isTrue()) : ?>
    <section class="project-pagination" data-section-color="<?= $page->nextListed()->color() ?>">
        <p class="project-pagination-text"><?= $paginationTextNext ?></p>
        <div class="project-title">
            <h2><a href="<?= $page->nextListed()->url(); ?>"><?= $page->nextListed()->title(); ?></a></h2>
        </div>
        <div class="project-ui ui-open left">
                <a href="<?= $page->nextListed()->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="project-ui ui-open right">
                <a href="<?= $page->nextListed()->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
    </section>
<?php elseif($page->hasPrevListed() && $page->prevListed()->pagestatus()->isTrue()) :?>
    <section class="project-pagination" data-section-color="<?= $page->prevListed()->color() ?>">
        <p class="project-pagination-text"><?= $paginationTextPrev ?></p>
        <div class="project-title">
            <h2><a href="<?= $page->prevListed()->url(); ?>"><?= $page->prevListed()->title(); ?></a></h2>
        </div>
        <div class="project-ui ui-open left">
                <a href="<?= $page->prevListed()->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="project-ui ui-open right">
                <a href="<?= $page->prevListed()->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
    </section>
<?php endif ?>

<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>
<div class="background">
    <svg viewBox="0 0 1139 841" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_f_149_272)">
            <circle cx="560.5" cy="325.5" r="125.5" fill="<?= $page->color() ?>" fill-opacity="0.9"/>
        </g>
        <g filter="url(#filter1_f_149_272)">
            <circle cx="335" cy="541" r="135" fill="<?= $page->color() ?>" fill-opacity="0.9"/>
        </g>
        <g filter="url(#filter2_f_149_272)">
        <circle cx="848.127" cy="303.127" r="90.1274" fill="<?= $page->color() ?>" fill-opacity="0.85"/>
        </g>
        <defs>
            <filter id="filter0_f_149_272" x="235" y="0" width="651" height="651" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_149_272"/>
            </filter>
            <filter id="filter1_f_149_272" x="0" y="206" width="670" height="670" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_149_272"/>
            </filter>
            <filter id="filter2_f_149_272" x="558" y="13" width="580.255" height="580.255" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_149_272"/>
            </filter>
        </defs>
    </svg>
</div>
<?= snippet('footer') ?>