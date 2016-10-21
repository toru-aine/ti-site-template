<?php
return [
  'cache' => 1,
  'formEmail' => 'no_reply@toruinteractive.com',
  'google_client_id' => 'SET_ME',
  'google_client_secret' => 'SET_ME',
  'mandrillKey' => 'SET_ME',
  'maxFileUpload' => '12MB',
  'maxUploadSize' => (1024 * 1024 * 12),
  'sentry' => 'SET_ME',
  'user.passwordResetCodeAndTokenExpire' => 1300,
  'user.passwordResetTokenExpire' => 3600 * 24,
  'version' => '0.0.1',
  'superadmin' => [
    'transfer-db' => [
      'charset' => 'utf8',
      'dsn' => 'mysql:host=localhost;dbname=my_db',
      'password' => 'root',
      'username' => 'root',
    ],
    'modules' => ['admin', 'frontend']
  ]
];
