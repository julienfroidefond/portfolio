<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/julienfroidefond/Sites/portfolio/user/config/plugins/email.yaml',
    'modified' => 1501231202,
    'data' => [
        'enabled' => true,
        'from' => 'julienfroidefond@gmail.com',
        'to' => 'julienfroidefond@gmail.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'smtp.mailgun.org',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'postmaster@sandbox4071c121181a409b988e28c1c165a398.mailgun.org',
                'password' => '1435a671e587c7a8f7cdb21edd6b2405'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
