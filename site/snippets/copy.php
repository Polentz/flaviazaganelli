<section class="page-copy">
    <?php foreach ($page->customBlocks()->toBlocks() as $block): ?>
        <?= $block ?>
    <?php endforeach ?>
</section>