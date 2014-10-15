<?php
namespace application\modules\social\components\services;
use \EAuthServiceBase;

class Partist extends EAuthServiceBase
{
    const AUTH_DATA_KEY = 'authData';

    protected $name = 'partist';
    protected $title = 'Partist.ru';
    protected $type = 'Custom';

    public function getId()
    {
    }

    protected function fetchAttributes()
    {
    }

    public function authenticate()
    {
    }
}
