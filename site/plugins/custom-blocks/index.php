<?php
Kirby::plugin('flaviazaganelli/blocks', [
    'blueprints' => [
        'blocks/download' => __DIR__ . '/blueprints/blocks/download.yml',
        'blocks/link' => __DIR__ . '/blueprints/blocks/link.yml',
      ],
      'snippets' => [
        'blocks/download' => __DIR__ . '/snippets/blocks/download.php',
        'blocks/link' => __DIR__ . '/snippets/blocks/link.php',
      ],
]);