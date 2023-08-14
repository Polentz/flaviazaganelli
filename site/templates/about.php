<?= snippet('header') ?>

<main class="content-wrapper">
    <section class="gallery">
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
        <?php if($page->text()->isNotEmpty()) : ?>
            <div class="secondary-text">
                <?= $page->text()->kt() ?>     
            </div>
        <?php endif ?>
    </section>
</main>

<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>
<?= snippet('footer') ?>