<?php
Kirby::plugin('magma/button', [
    'blueprints' => [
        'blocks/fileBlock' => __DIR__ . '/blueprints/blocks/fileBlock.yml',
        'blocks/textBlock' => __DIR__ . '/blueprints/blocks/textBlock.yml',
      ],
      'snippets' => [
        'blocks/fileBlock' => __DIR__ . '/snippets/blocks/fileBlock.php',
        'blocks/textBlock' => __DIR__ . '/snippets/blocks/textBlock.php',
      ],
]);