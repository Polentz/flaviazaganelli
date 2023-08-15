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
<?= snippet('background') ?>
<?= snippet('footer') ?>