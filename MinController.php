<?php
namespace application\controllers;

use application\components\Controller;

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
\Yii::import('ext.minScript.controllers.ExtMinScriptController');

//ExtMinScriptController.php

class MinController extends \ExtMinScriptController
{
    public function actionIndex()
    {
        die('1');
    }
    public function actionServe1()
    {
        die('1');
    }
}


