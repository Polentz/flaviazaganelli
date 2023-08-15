<div class="inner-menu index close">
    <ul class="inner-menu-list">
        <?php foreach($pages->template('project')->listed() as $project) : ?>
            <?php if ($page->is('home')) : ?>
                <li><a href="#<?= $project->title()->slug() ?>" class="js-href"><?= $project->title() ?></a></li>
            <?php elseif ($project->pagestatus()->isTrue()) : ?>
                <li><a href="<?= $project->url() ?>"><?= $project->title() ?></a></li>
            <?php endif ?>
        <?php endforeach ?>   
    </ul>
    <div class="popup-ui ui-close left">
        <svg viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.6646 1.91026L24.3291 24.2548M24.3291 24.2548L1.42822 47.1651M24.3291 24.2548L1.42822 1.34457M24.3291 24.2548L46.6646 46.5994" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <div class="popup-ui ui-close right">
        <svg viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.6646 1.91026L24.3291 24.2548M24.3291 24.2548L1.42822 47.1651M24.3291 24.2548L1.42822 1.34457M24.3291 24.2548L46.6646 46.5994" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
</div>