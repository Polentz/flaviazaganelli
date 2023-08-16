<?php if($pages->template('project') || $pages->template('subpage')) : ?>
    <section class="gallery" data-section-color="<?= $page->color() ?>">
<?php else : ?>
    <section class="gallery">
<?php endif ?>
        <div class="gallery-grid">
            <?php foreach ($page->gallery()->toFiles() as $image) : ?>
                <figure class="gallery-grid-item">
                    <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
                    <?php if($image->caption()->isNotEmpty()) : ?>
                        <figcaption>
                            <?= $image->caption()->kt() ?>
                        </figcaption>
                    <?php endif ?>
                </figure>
            <?php endforeach ?>
        </div>
    </section>


