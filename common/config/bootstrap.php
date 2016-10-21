<?php
	define ('HTTP', 'http://');
	define ('HTTPS', 'http://');
  define ('HOST', BASE);
  define ('REST', 'rest.' . BASE);
  define ('ADMIN', 'admin.' . BASE);
	define ('FRONTEND', BASE);
	define ('ASSETS', 'assets.' . BASE);

	Yii::setAlias ('@admin', BASE_PATH . '/admin');
	Yii::setAlias ('@common', BASE_PATH . '/common');
	Yii::setAlias ('@filesPath', BASE_PATH_PARENT . '/files');
	Yii::setAlias ('@filesUrl', HTTPS . ASSETS . '/files');
	Yii::setAlias ('@images', BASE_PATH_PARENT . '/images');
	Yii::setAlias ('@imagesUrl', HTTPS . ASSETS . '/images');
	Yii::setAlias ('@liveedit', BASE_PATH . '/common/views/liveedit');
	Yii::setAlias ('@ticms', BASE_PATH_PARENT . '/vendor/toruinteractive/ti-cms');
	Yii::setAlias ('admin', BASE_PATH . '/admin');
	Yii::setAlias ('common', BASE_PATH . '/common');
	Yii::setAlias ('console', BASE_PATH . '/console');
	Yii::setAlias ('frontend', BASE_PATH . '/frontend');
	Yii::setAlias ('rest', BASE_PATH . '/rest');
