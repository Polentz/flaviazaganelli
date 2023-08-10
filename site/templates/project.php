<?= snippet('header') ?>
<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>

<main class="content">

    <section class="scroll-wrapper">
        <?php foreach ($page->gallery()->toFiles() as $image) : ?>
            <figure class="image-wrapper">
                <img src="<?= $image->resize(1200, null)->url() ?>">
            </figure>
        <?php endforeach ?>
        <?= $page->maintext()->kt() ?>
        <div class="button-wrapper">
            <button>
                <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.852804 1L16.4577 1M16.4577 1L16.6553 17M16.4577 1L0.655273 17"/>
                </svg>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    Trailer
                </a>
            </button>
            <button>
                <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.852804 1L16.4577 1M16.4577 1L16.6553 17M16.4577 1L0.655273 17"/>
                </svg>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    Dossier
                </a>
            </button>
        </div>
        <div class="text-wrapper credits">
            <?= $page->credits()->kt() ?>
        </div>
    </section>

    <!-- <section class="gallery">
        <?php foreach ($page->gallery()->toFiles() as $image) : ?>
            <figure class="image-wrapper">
                <img src="<?= $image->resize(1200, null)->url() ?>">
            </figure>
        <?php endforeach ?>
    </section> -->

    <!-- <section class="text-wrapper">
        <div class="credits-text">
            <?= $page->credits()->kt() ?>
        </div>
    </section> -->
</main>
<div class="project-ui ui-close left">
    <a href="/">
        <svg viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M49.6553 1.68235L25.9553 25.0898M25.9553 25.0898L1.65527 49.0898M25.9553 25.0898L1.65527 1.08975M25.9553 25.0898L49.6553 48.4972"/>
        </svg>
    </a>
</div>
<div class="project-ui ui-close right">
    <a href="/">
        <svg viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M49.6553 1.68235L25.9553 25.0898M25.9553 25.0898L1.65527 49.0898M25.9553 25.0898L1.65527 1.08975M25.9553 25.0898L49.6553 48.4972"/>
        </svg>
    </a>
</div>

<?= snippet('footer') ?>