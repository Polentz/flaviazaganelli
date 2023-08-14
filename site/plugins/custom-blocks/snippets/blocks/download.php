<?php if($file = $block->file()->toFile()): ?>
      <a href="<?= $file->url() ?>" target="_blank" rel="noopener noreferrer"><?= $block->text() ?></a>
<?php endif ?>