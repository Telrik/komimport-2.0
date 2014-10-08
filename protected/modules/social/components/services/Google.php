<?php
namespace application\modules\social\components\services;

use \GoogleOAuthService;

class Google extends GoogleOAuthService
{
    const AUTH_DATA_KEY = 'authData';

    public $email;
    public $info;

    public function getId()
    {
        return $this->info['id'];
    }

    protected function fetchAttributes()
    {

    }

    public function authenticate()
    {
        if (parent::authenticate()) {

            //$this->scope ='https://www.googleapis.com/auth/userinfo.email';

            $this->info = (array)$this->makeSignedRequest('https://www.googleapis.com/oauth2/v1/userinfo'); //https://www.googleapis.com/oauth2/v1/userinfo');

            $this->email = $this->info['email'];


            //print_r($info);
            // $this->email = 'zzz@xx.xx';
            //die();

            // print_r($info);
            //  file_put_contents(dirname(__FILE__) .'/111.txt', print_r($this, true), FILE_APPEND | LOCK_EX);
            $this->setState(
                self::AUTH_DATA_KEY,
                array(
                    'info' => $this->info, // $info['given_name'],
                    //'family_name'=> $info['family_name'],
                    'email' => $this->email,
                    'uid' => $this->info['id'], //'$this->getId(),
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
