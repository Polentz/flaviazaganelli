<section class="subpage close <?=$page->title()->slug() ?>">
    <div class="subpage-wrapper">
        <div class="subpage-cover">
            <?php if ($image = $page->cover()->toFile() ) : ?>
                <figure>
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
                <?= $page->maintext()->kt() ?>
            </div>
            <?php if($page->audio()->isNotEmpty()) : ?>
                <?= snippet('audio', ['page' => $page]) ?>
            <?php endif ?>
            <?php if($video = $page->video()->toFile()) : ?>
                <figure class="video-component">
                    <video controls loop controlsList="nodownload noremoteplayback">
                        <source src="<?= $video->url() ?>">
                    </video>
                    <figcaption>
                            <?= $video->caption()->kt() ?>
                    </figcaption>
                </figure>
            <?php endif ?>
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