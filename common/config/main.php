<?php
return [
	'bootstrap' => ['log', 's3bucket'],
	'components' => [
		'authClientCollection' => [
			'class' => 'yii\authclient\Collection',
			'clients' => [
				'google' => [
					'class' => 'yii\authclient\clients\GoogleOAuth'
				],
			],
		],
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'db' => [
			'class' => 'yii\db\Connection',
			'charset' => 'utf8',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'levels' => ['error', 'warning'],
					'class' => 'yii\log\FileTarget',
				],
			],
		],
		'raven' => [
			'class' => 'common\components\ErrorHandler',
		],
		's3bucket' => [
			'class' => \frostealth\yii2\aws\s3\Storage::className(),
			'region' => 'eu-west-1',
			'defaultAcl' => \frostealth\yii2\aws\s3\Storage::ACL_PUBLIC_READ
		],
		'user' => [
			'class' => 'yii\web\User',
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true
		]
	]
];
