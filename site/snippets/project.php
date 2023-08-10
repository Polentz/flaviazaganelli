
<section id="<?= $project->title()->slug() ?>" class="project" data-section-title="<?= $project->title() ?>" data-section-color="<?= $project->color() ?>">
    <div class="project-grid">
        <?php foreach ($project->cover()->toFiles() as $image) : ?>
            <div class="project-grid-item">
                <img src="<?= $image->resize(1200, null)->url() ?>">
            </div>
        <?php endforeach ?>
    </div>
    <div class="project-wrapper">    
        <?php if ($project->pagestatus()->isTrue()) : ?>   
            <div class="project-title">
                <h2><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h2>
            </div>
            <div class="project-ui ui-open left">
                <a href="<?= $project->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="project-ui ui-open right">
                <a href="<?= $project->url() ?>">
                    <svg viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.4 1C33.4 32.6 33.4 40.0064 33.4 65M1 32.6H65" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        <?php else : ?>
            <div class="project-title">
                <h2><?= $project->title() ?></h2>
            </div>
        <?php endif ?>
    </div>
    <?php if ($project->info()->isNotEmpty()) : ?>
        <div class="project-info">
            <?= $project->info()->kt() ?>
        </div>
    <?php endif ?>
</section>