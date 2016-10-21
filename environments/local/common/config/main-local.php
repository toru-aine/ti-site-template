<?php
return [
  'components' => [
		'authClientCollection' => [
			'clients' => [
				'google' => [
					'clientId' => 'SET_ME',
					'clientSecret' => 'SET_ME'
				]
			]
		],
    'db' => [
      'charset' => 'utf8',
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=localhost;dbname=SET_ME',
      'password' => 'root',
      'username' => 'root',
    ],
    'mailer' => [
      'class' => 'yii\swiftmailer\Mailer',
      'useFileTransport' => true,
      'viewPath' => '@common/mail',
    ],
		's3bucket' => [
			'credentials' => [
				'key' => 'SET_ME',
				'secret' => 'SET_ME'
			],
			'bucket' => 'SET_ME',
			'debug' => true
		]
  ],
  'vendorPath' => dirname (dirname (dirname (__DIR__))) . '/vendor',
];
