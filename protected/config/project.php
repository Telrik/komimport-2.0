<?php
return array(
    'import' => array(
        'ext.partist.*',
        //'application.extensions.partist.*'
    ),
    'rules' => array(
        '/equipment/' => 'equipment/index',
        //'/equipment/<action:\w+>' => 'equipment/<action>',
        '/equipment/view/<id:\d+>' => 'equipment/view',
    ),
);