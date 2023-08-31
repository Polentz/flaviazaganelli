<?php if($pages->template('project')) : ?>
    <section class="gallery" data-section-color="<?= $page->color() ?>">
<?php else : ?>
    <section class="gallery">
<?php endif ?>
        <div class="gallery-grid">
            <?php foreach ($page->gallery()->toFiles() as $image) : ?>
                <figure class="gallery-grid-item">
                    <img src="<?= $image->resize(800, null)->url() ?>" alt="<?= $image->alt() ?>">
                    <?php if($image->caption()->isNotEmpty()) : ?>
                        <figcaption>
                            <?= $image->caption()->kt() ?>
                        </figcaption>
                    <?php endif ?>
                </figure>
            <?php endforeach ?>
            <?php if($video = $page->video()->toFile()) : ?>
                <figure class="gallery-grid-item">
                    <video controls autoplay muted loop controlsList="nodownload noremoteplayback">
                        <source src="<?= $video->url() ?>">
                    </video>
                    <figcaption>
                            <?= $video->caption()->kt() ?>
                    </figcaption>
                </figure>
            <?php endif ?>
        </div>
        <div class="mobile-ui gallery-button">
            <svg viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.1 9V16.9M17.1 16.9L17.1 25M17.1 16.9H9M17.1 16.9H25M33 17C33 25.8366 25.8366 33 17 33C8.16344 33 1 25.8366 1 17C1 8.16344 8.16344 1 17 1C25.8366 1 33 8.16344 33 17Z"/>
            </svg>
        </div>
    </section>


