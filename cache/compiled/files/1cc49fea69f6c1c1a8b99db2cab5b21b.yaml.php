<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/julienfroidefond/Sites/portfolio/user/config/plugins/email.yaml',
    'modified' => 1501234506,
    'data' => [
        'enabled' => true,
        'from' => 'julienfroidefond@gmail.com',
        'to' => 'julienfroidefond@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.sendgrid.net',
                'port' => 587,
                'encryption' => 'none',
                'user' => 'apikey',
                'password' => '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'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
