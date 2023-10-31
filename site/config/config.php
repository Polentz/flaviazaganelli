
<?php

return [
    'debug'  => true,
    'languages' => true,
    'smartypants' => false,
    'panel' => [
        'css' => 'assets/css/panel.css'
    ],
    'blocks' => [
        'fieldsets' => [
          'custom' => [
            'label' => 'Seleziona una tipologia:',
            'type' => 'group',
            'fieldsets' => [
              'maintext',
              'subtext',
              'buttons',
              ]
            ],
        ]
            ],
    'home' => 'coming-soon',
];