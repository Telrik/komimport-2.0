<?php
namespace application\controllers;

use application\components\Controller;
use Yii;

\Yii::import('ext.partist.partistConnector', true);


class GlobalController extends Controller
{
    public function actions()
    {
        return array(
            'captcha' => array(
                'class' => 'yupe\components\actions\YCaptchaAction',
                'backColor' => 0xFFFFFF,
                'testLimit' => 1,
                'minLength' => Yii::app()->getModule('user')->minCaptchaLength,
            ),
        );
    }

    public function actionLogin1()
    {
        try {
            $identity = new \UserIdentity($this->service);

            if ($identity->authenticate() && Yii::app()->getUser()->login($identity)) {

                Yii::app()->getUser()->setFlash(
                    YFlashMessages::SUCCESS_MESSAGE,
                    Yii::t('SocialModule.social', 'Вы успешно вошли!')
                );

                $module = Yii::app()->getModule('user');

                $redirect = (Yii::app()->getUser()->isSuperUser() && $module->loginAdminSuccess)
                    ? array($module->loginAdminSuccess)
                    : array($module->loginSuccess);

                Yii::app()->authenticationManager->setBadLoginCount(Yii::app()->getUser(), 0);

                $this->redirect(Yii::app()->getUser()->getReturnUrl($redirect));
            }

            if ($this->service->hasAttribute('email') && Yii::app()->userManager->isUserExist(
                    $this->service->email
                )
            ) {

                Yii::app()->getUser()->setFlash(
                    YFlashMessages::INFO_MESSAGE,
                    Yii::t(
                        'SocialModule.social',
                        'Аккаунт с таким адресом уже существует! Войдите если хотите присоединить эту социальную сеть к своему аккаунту.'
                    )
                );

                $this->redirect(array('/social/connect', 'service' => $this->service->getServiceName()));
            }

            Yii::app()->getUser()->setFlash(
                YFlashMessages::SUCCESS_MESSAGE,
                Yii::t(
                    'SocialModule.social',
                    'Вы успешно авторизовались, пожалуйста, завершите регистрацию!'
                )
            );

            $this->redirect(array('/social/register', 'service' => $this->service->getServiceName()));

            $this->redirect('/login');
        } catch (EAuthException $e) {
            Yii::app()->getUser()->setFlash('error', 'EAuthException: ' . $e->getMessage());
            $this->redirect('/login');
        }
    }

    public function actionIndex()
    {

        //$this->layout = 'equipment';
        $this->render('index');
    }

    public function actionLogin($login = null, $password = null)
    {

        if (Yii::app()->user->isAuthenticated()) {
            //$this->redirect(Yii::app()->getUser()->getReturnUrl());
        }

        //@TODO 3 вынести в настройки модуля
        $scenario = Yii::app()->authenticationManager->getBadLoginCount(Yii::app()->getUser()) > 3 ? 'loginLimit' : '';
        $module = Yii::app()->getModule('user');

        $model = new \LoginForm($scenario);
        $this->render('login', array('model' => $model, 'module' => $module));

    }

    public function partist_create_user($login, $password, $result)
    {
        $user = new User;

        $user->email = $login;
        $user->nick_name = str_replace(array('@', '.'), '_', $login);
        $user->first_name = $result->data->name;
        $user->last_name = $result->data->family;
        $user->sid = $result->data->SID;
        $user->is_partist = 1;
        $user->status = User::STATUS_ACTIVE;
        $user->email_confirm = User::EMAIL_CONFIRM_YES;
        $user->hash = Yii::app()->userManager->hasher->hashPassword($password);
        $user->partist_hash = Yii::app()->userManager->hasher->hashPassword($password);

        if ($user->save()) {
            Yii::log(
                Yii::t('UserModule.user', 'Partist account {nick_name} was created', array('{nick_name}' => $user->nick_name)),
                CLogger::LEVEL_INFO, UserModule::$logCategory
            );

            return $user;
        } else {
            CVarDumper::dump($user->attributes, 10, true);
            CVarDumper::dump($user->errors, 10, true);
            die();
        }
    }

    public function partist_process($login, $password)
    {
        \Yii::import('ext.partistConnector.partistConnector', true);
        $result = \Partist::authenticate($login, $password);

        if ($result->status != 'ok') {
            //Не удалось авторизоватся в партисте, выходим
            return;
        } else {
            // Данные с партиста получены
            if (($user = \User::model()->active()->findByAttributes(array('email' => $login))) === null) {
                $this->partist_create_user($login, $password, $result); // Юзера нет, необходимо создать.
            } else {
                // Юзер есть, обновим ему пароль, на всякий случай
                $user->partist_hash = Yii::app()->userManager->hasher->hashPassword($password);
                $user->is_partist = 1;
                $user->sid = $result->data->SID;
                $user->save();
            }
        }
    }

}
