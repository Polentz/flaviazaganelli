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
    <?= snippet('gallery') ?>
    <?= snippet('copy') ?>
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
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65"/>
                    </svg>
                </a>
            </div>
            <div class="project-ui ui-open right">
                <a href="<?= $page->nextListed()->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65"/>
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
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65"/>
                    </svg>
                </a>
            </div>
            <div class="project-ui ui-open right">
                <a href="<?= $page->prevListed()->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65"/>
                    </svg>
                </a>
            </div>
    </section>
<?php endif ?>

<?php foreach($page->children()->listed() as $subpage) : ?>
    <?= snippet('subpage', ['subpage' => $subpage]) ?>
<?php endforeach ?>

<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('submenu') ?>
<?= snippet('background') ?>
<?= snippet('footer') ?>