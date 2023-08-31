<?php
Kirby::plugin('flaviazaganelli/blocks', [
    'blueprints' => [
        'blocks/maintext' => __DIR__ . '/blueprints/blocks/maintext.yml',
        'blocks/subtext' => __DIR__ . '/blueprints/blocks/subtext.yml',
        'blocks/buttons' => __DIR__ . '/blueprints/blocks/buttons.yml',
        'blocks/download' => __DIR__ . '/blueprints/blocks/download.yml',
        'blocks/link' => __DIR__ . '/blueprints/blocks/link.yml',
        'blocks/special' => __DIR__ . '/blueprints/blocks/special.yml',
      ],
      'snippets' => [
        'blocks/maintext' => __DIR__ . '/snippets/blocks/maintext.php',
        'blocks/subtext' => __DIR__ . '/snippets/blocks/subtext.php',
        'blocks/buttons' => __DIR__ . '/snippets/blocks/buttons.php',
        'blocks/download' => __DIR__ . '/snippets/blocks/download.php',
        'blocks/link' => __DIR__ . '/snippets/blocks/link.php',
        'blocks/special' => __DIR__ . '/snippets/blocks/special.php',
      ],
]);