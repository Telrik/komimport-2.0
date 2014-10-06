<?php
namespace application\modules\social\components\services;

//require_once dirname(dirname(__FILE__)) . '/EOAuth2Service.php';

use \GoogleOAuthService;

class Google extends GoogleOAuthService //GoogleOpenIDService
{
    const AUTH_DATA_KEY = 'authData';

    public $requiredAttributes;
    public $email;

    public function authenticate()
    {
        print_r($this);


        if (parent::authenticate()) {
            $this->setState(
                self::AUTH_DATA_KEY,
                array(
                    'requiredAttributes' => $this->requiredAttributes,
                    'email' => $this->email,
                    'uid' => $this->getId(),
                    'service' => $this->getServiceName(),
                    'type' => $this->getServiceType(),
                )
            );

            return true;
        }

        return false;
    }

    public function getAuthData()
    {
        return $this->getState(self::AUTH_DATA_KEY);
    }

    public function cleanAuthData()
    {
        $this->setState(self::AUTH_DATA_KEY, null);
    }
}
