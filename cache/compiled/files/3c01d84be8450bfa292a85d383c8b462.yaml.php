<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/julienfroidefond/Sites/portfolio/user/config/site.yaml',
    'modified' => 1500964153,
    'data' => [
        'title' => 'JFR',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Julien Froidefond',
            'email' => 'julienfroidefond@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'My description in settings'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'logo' => [
            'icon' => NULL,
            'text' => 'JFR',
            'url' => NULL
        ],
        'userlinks' => [
            0 => [
                'text' => 'Sample link',
                'url' => '#'
            ],
            1 => [
                'text' => 'Another Sample link',
                'url' => '#'
            ]
        ],
        'header' => [
            'title' => 'Julien <b>Froidefond</b>',
            'description' => 'Front-end Architect <em>&&</em> Web developer.',
            'buttons' => [
                0 => [
                    'text' => 'Télécharger CV',
                    'url' => '/CV_JFR.pdf',
                    'icon' => NULL
                ]
            ]
        ],
        'footer' => [
            'links' => [
                0 => [
                    'text' => 'Terms &amp; Conditions',
                    'url' => '#'
                ],
                1 => [
                    'text' => 'Legals',
                    'url' => '#'
                ]
            ]
        ],
        'socialcount' => [
            'url' => NULL,
            'facebook_url' => NULL,
            'twitter_url' => NULL,
            'linkedin_url' => NULL
        ],
        'copyright' => 'Julien Froidefond'
    ]
];
