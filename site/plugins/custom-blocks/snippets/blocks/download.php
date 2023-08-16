<?php if($file = $block->file()->toFile()): ?>
      <a class="buttton-download" href="<?= $file->url() ?>" target="_blank" rel="noopener noreferrer"><?= $block->text() ?></a>
<?php endif ?>