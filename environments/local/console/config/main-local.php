<?php
return [
	'bootstrap' => ['gii'],
  'components' => [
    'db' => [
      'charset' => 'utf8',
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=127.0.0.1;dbname=SET_ME',
      'password' => 'root',
      'username' => 'root',
    ]
  ],
  'modules' => [
    'gii' => [
      'class' => 'yii\gii\Module',
      // 'generators' => [
      //   'ti-model' => ['class' => 'TiCMS\generators\timodel\Generator'],
      //   'ti-models' => ['class' => 'TiCMS\generators\timodels\Generator'],
      // ]
    ],
  ],
];
