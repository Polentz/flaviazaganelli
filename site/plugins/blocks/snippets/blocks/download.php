<?php if($file = $block->file()->toFile()): ?>
  <button class="button" aria-hidden="true">
      <a href="<?= $file->url() ?>" target="_blank" rel="noopener noreferrer"><?= $block->text() ?></a>
  </button>
<?php endif ?>