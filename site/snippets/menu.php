<header class="header">
    <menu class="menu">
        <?php if ($page->is('home')) : ?>
            <h1 class="site-title">Flavia Zaganelli</h1>
            <div class="page-title">
                <h2></h2>
            </div>
            <div class="nav">
                <a href="">Bio</a>
                <p id="calendar">Calendar</p>
                <p id="contact">Contact</p>
                <p id="index">Index</p>                
            </div>
        <?php else : ?>
            <h1 class="site-title"><a href="/">Flavia Zaganelli</a></h1>
            <div class="page-title">
                <h2><?= $page->title() ?></h2>
            </div>
            <div class="nav">
                <a href="">Bio</a>
                <p id="calendar">Calendar</p>
                <p id="contact">Contact</p>     
                <p id="index">Index</p>         
            </div>
        <?php endif ?>
    </menu>
    <div class="site-lang">
        <a href="">English</a>
    </div>
</header>