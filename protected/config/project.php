<?php
return array(
    'import' => array(
        'ext.minscript.controllers.*',
        'ext.easyimage.EasyImage',
        //'ext.partist.*',
    ),

    'component' => array(
        'easyImage' => array(
            'class' => 'application.extensions.easyimage.EasyImage',
            'driver' => 'GD',
            'quality' => 100,
            'cachePath' => '/public/assets/easyimage/',
            'cacheTime' => 2592000,
            'retinaSupport' => false,
        ),
        'clientScript' => defined('YII_DEBUG') && YII_DEBUG
            && is_writable(Yii::getPathOfAlias('application.runtime'))
            && is_writable(Yii::getPathOfAlias('public.assets')) ? array() : array('minScriptLmCache' => 3600, 'class' => 'ext.minscript.components.ExtMinScript',),
    ),
    'rules' => array(
        '/min/serve/g/<g:\w+>/lm/<lm:\d+>' => 'min/serve',
        '/global/profile' => 'global/profile',
        '/equipment/' => 'equipment/list',
        //'/equipment/<action:\w+>' => 'equipment/<action>',
        '/equipment/view/<id:\d+>' => 'equipment/view',
        '/equipment/type/<id:\d+>/<mode:\w+>' => 'equipment/type',
        '/equipment/type/<id:\d+>' => 'equipment/type',
        '/equipment/list' => 'equipment/list',
    ),
);