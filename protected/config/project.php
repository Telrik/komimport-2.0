<?php
return array(
    'import' => array( //'ext.partist.*',
    ),
    'rules' => array(
	'/global/login' => 'global/login',
        '/equipment/' => 'equipment/list',
        //'/equipment/<action:\w+>' => 'equipment/<action>',
        '/equipment/view/<id:\d+>' => 'equipment/view',
        '/equipment/type/<id:\d+>/<mode:\w+>' => 'equipment/type',
        '/equipment/type/<id:\d+>' => 'equipment/type',
        '/equipment/list' => 'equipment/list',
    ),
);