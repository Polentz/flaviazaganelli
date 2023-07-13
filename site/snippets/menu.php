<header class="header">
    <menu class="menu">
        <nav class="nav">
            <h1>Flavia Zaganelli</h1>
            <div class="nav-page">
                <a class="js-href" href="">titolo della sezione</a>
                <!-- <a class="js-href" href="#<?= $page->title()->slug() ?>"><?= $page->title() ?></a> -->
            </div>
            <div class="nav-site">
                <!-- <?php foreach ($site->children()->listed() as $project) : ?>
                    <a href="<?= $project->url() ?>"><?= $project->title() ?></a>
                <?php endforeach ?> -->
                <?php if ($page->is('home')) : ?>
                    <p id="calendar">Calendar</p>
                    <p id="contact">Contact</p>
                    <p id="index">Index</p>
                <?php endif ?>
            </div>
        </nav>
        <div class="menu-lang">
            <a href="">English</a>
        </div>
    </menu>
</header>