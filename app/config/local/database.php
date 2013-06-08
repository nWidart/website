<?php

return array(
    'default' => 'dev',
    'connections' => array(
        'dev' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'lvlfr4',
            'username'  => 'root',
            'password'  => 'password',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
    ),
    'migrations' => 'migrations',
);
