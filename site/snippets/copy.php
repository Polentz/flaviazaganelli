<section class="page-copy">
    <div class="main-text">
        <?= $page->maintext()->kt() ?>
        <?php if($page->customBlocks()->isNotEmpty()) : ?>
            <div class="buttons">
                <?php foreach ($page->customBlocks()->toBlocks() as $block): ?>
                    <div class="button-wrapper">
                        <button class="button">
                            <svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.852804 1L16.4577 1M16.4577 1L16.6553 17M16.4577 1L0.655273 17"/>
                            </svg>
                            <?= $block ?>
                        </button>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>
    </div>
    <?php if($page->subtext()->isNotEmpty()) : ?>
        <div class="secondary-text">
            <?= $page->subtext()->kt() ?>     
        </div>
    <?php endif ?>
</section>