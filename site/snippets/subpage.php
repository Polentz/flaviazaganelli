<section class="subpage close <?=$subpage->title()->slug() ?>">
    <div class="subpage-cover" data-section-color="<?= $subpage->parent()->color() ?>">
        <?php if ($image = $subpage->cover()->toFile() ) : ?>
            <figure class="">
                <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
                <?php if($image->caption()->isNotEmpty()) : ?>
                    <figcaption>
                        <?= $image->caption()->kt() ?>
                    </figcaption>
                <?php endif ?>
            </figure>
        <?php endif ?>
    </div>
    <div class="subpage-copy page-copy">
        <div class="main-text">
            <?= $subpage->maintext()->kt() ?>
            <?= snippet('audio', ['page' => $subpage]) ?>
        </div>
    </div>
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
</section>