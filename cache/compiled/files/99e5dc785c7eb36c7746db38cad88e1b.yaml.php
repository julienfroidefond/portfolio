<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/julienfroidefond/Sites/landio/user/config/plugins/email.yaml',
    'modified' => 1500986287,
    'data' => [
        'enabled' => true,
        'from' => 'julienfroidefond@gmail.com',
        'to' => 'julienfroidefond@gmail.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
