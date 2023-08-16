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
            <h1 class="site-title">Flavia Zaganelli <span class="mobile-ui">+</span></h1>
            <div class="page-title">
                <h2></h2>
            </div>
        <?php else : ?>
            <h1 class="site-title"><a href="<?= page('home')->url() ?>">Flavia Zaganelli</a> <span class="mobile-ui">+</span></h1>
            <div class="page-title">
                <h2><?= $page->title() ?></h2>
            </div>
        <?php endif ?>
        <div class="nav">
            <a href="<?= page('about')->url() ?>"><?= page('about')->title() ?></a>
            <?php if($site->calendarBlocks()->isNotEmpty()) : ?>
                <p id="calendar" class="nav-button"><?= $calendar ?></p>
            <?php endif ?>
            <p id="contact" class="nav-button"><?= $contact ?></p>
            <p id="index" class="nav-button">Index</p>                
        </div>
    </menu>
    <div class="site-lang">
        <a href="<?= $page->url($href) ?>" hreflang="<?= $href ?>"><?= $languageString ?></a>
    </div>
</header>