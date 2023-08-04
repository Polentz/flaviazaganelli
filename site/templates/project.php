<?= snippet('header') ?>
<?= snippet('contact') ?>
<?= snippet('calendar') ?>
<?= snippet('projects-menu') ?>

<main>
    <section class="text">
        <div class="text-wrapper">
            <?= $page->maintext()->kt() ?>
        </div>
    </section>

    <section class="gallery">
        <?php foreach ($page->gallery()->toFiles() as $image) : ?>
            <img src="<?= $image->resize(1200, null)->url() ?>">
        <?php endforeach ?>
    </section>
    <section class="text">
        <div class="text-wrapper">
            <?= $page->credits()->kt() ?>
        </div>
    </section>
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