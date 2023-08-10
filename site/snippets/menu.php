<?php
    if ($kirby->language()->code() == 'it') {
        $href = 'en';
        $languageString = 'English';
        $calendar = 'Calendario';
        $contact = 'Contatti';
    } else if ($kirby->language()->code() == 'en') {
        $href = '/';
        $languageString = 'Italiano';
        $calendar = 'Calendar';
        $contact = 'Contact';
    }
?>


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
            <a href="/">Bio</a>
            <p id="calendar" class="nav-button"><?= $calendar ?></p>
            <p id="contact" class="nav-button"><?= $contact ?></p>
            <p id="index" class="nav-button">Index</p>                
        </div>
    </menu>
    <div class="site-lang">
        <a href="<?= $page->url($href) ?>" hreflang="<?php echo $href ?>"><?= $languageString ?></a>
    </div>
</header>