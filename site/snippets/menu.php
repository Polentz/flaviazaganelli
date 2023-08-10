<header class="header">
    <menu class="menu">
        <?php if ($page->is('home')) : ?>
            <h1 class="site-title">Flavia Zaganelli</h1>
            <div class="page-title">
                <h2>+</h2>
            </div>
        <?php else : ?>
            <h1 class="site-title"><a href="/">Flavia Zaganelli</a></h1>
            <div class="page-title">
                <h2><?= $page->title() ?></h2>
            </div>
        <?php endif ?>
        <div class="nav">
            <a href="">Bio</a>
            <p id="calendar" class="nav-button">Calendar</p>
            <p id="contact" class="nav-button">Contact</p>
            <p id="index" class="nav-button">Index</p>                
        </div>
    </menu>
    <div class="site-lang">
        <a href="">English</a>
    </div>
</header>