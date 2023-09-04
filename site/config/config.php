
<?php

return [
    'debug'  => false,
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