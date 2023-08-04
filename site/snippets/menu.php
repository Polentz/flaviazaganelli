<header class="header">
    <menu class="menu">
        <nav class="nav">
            <?php if ($page->is('home')) : ?>
                <h1>Flavia Zaganelli</h1>
                <div class="nav-page">
                    <h2></h2>
                </div>
                <div class="nav-site">
                    <a href="">Bio</a>
                    <p id="calendar">Calendar</p>
                    <p id="contact">Contact</p>
                    <p id="index">Index</p>                
                </div>
            <?php else : ?>
                <h1><a href="/">Flavia Zaganelli</a></h1>
                <div class="nav-page">
                    <h2><?= $page->title() ?></h2>
                </div>
                <div class="nav-site">
                    <a href="">Bio</a>
                    <p id="calendar">Calendar</p>
                    <p id="contact">Contact</p>     
                    <p id="index">Index</p>         
                </div>
            <?php endif ?>
        </nav>
        <div class="menu-lang">
            <a href="">English</a>
        </div>
    </menu>
</header>