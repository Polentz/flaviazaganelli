<?= snippet('header') ?>
<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>

<main class="content">

    <section class="scroll-wrapper">
        <?= $page->maintext()->kt() ?>
        <?= $page->credits()->kt() ?>
        <button>Button!</button>
        <button>Button!</button>
        <button>Button!</button>
        <?php foreach ($page->gallery()->toFiles() as $image) : ?>
            <figure class="image-wrapper">
                <img src="<?= $image->resize(1200, null)->url() ?>">
            </figure>
        <?php endforeach ?>
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