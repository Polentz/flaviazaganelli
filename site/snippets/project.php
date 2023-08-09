
<section id="<?= $project->title()->slug() ?>" class="project" data-section-title="<?= $project->title() ?>">
    <div class="project-grid">
        <?php if ($page->is('home')) : ?>
            <?php foreach ($project->cover()->toFiles() as $image) : ?>
                <div class="project-grid-item">
                    <img src="<?= $image->resize(1200, null)->url() ?>">
                </div>
            <?php endforeach ?>
        <?php else : ?>
            <?php foreach ($project->gallery()->toFiles() as $image) : ?>
                <div class="project-grid-item">
                    <img src="<?= $image->resize(1200, null)->url() ?>">
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
    <?php if ($page->is('home')) : ?>
        <div class="project-wrapper">        
            <div class="project-title">
                <?php if ($project->pagestatus()->isTrue()) : ?>
                    <h2><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h2>
                <?php else : ?>
                    <h2><?= $project->title() ?></h2>
                <?php endif ?>
            </div>
            <div class="project-ui ui-open left">
                <?php if ($project->pagestatus()->isTrue()) : ?>
                    <a href="<?= $project->url() ?>">
                        <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                <?php endif ?>
            </div>
            <div class="project-ui ui-open right">
                <?php if ($project->pagestatus()->isTrue()) : ?>
                    <a href="<?= $project->url() ?>">
                        <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                <?php endif ?>
            </div>
        </div>
        <div class="project-info">
            <?= $project->info()->kt() ?>
        </div>
    <?php endif ?>
</section>