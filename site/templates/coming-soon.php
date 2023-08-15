<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <?= css ([
        'assets/css/base.css',
        'assets/css/style.css',
        '@auto',
    ]) ?>
    <style>
        .background svg {
            fill: #001eff;
        }
    </style>
</head>
<body>
    <header class="header">
        <menu class="menu">
            <h1 class="site-title">Flavia Zaganelli</h1>
            <div class="page-title">
                <h2>My website is under construction. Come back soon!</h2>
            </div>
        </menu>
    </header>
    <?= snippet('background') ?>
</body>
</html>