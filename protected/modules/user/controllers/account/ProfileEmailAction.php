<?php

/**
 * Экшн, отвечающий за смену email пользователя
 *
 * @category YupeComponents
 * @package  yupe.modules.user.controllers.account
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.8
 * @link     http://yupe.ru
 *
 **/
class ProfileEmailAction extends CAction
{
    public function run()
    {
        if (($user = Yii::app()->user->getProfile()) === null) {
            Yii::app()->user->setFlash(
                yupe\widgets\YFlashMessages::ERROR_MESSAGE,
                Yii::t('UserModule.user', 'User not found.')
            );
            Yii::app()->user->logout();
            $this->controller->redirect(
                array('/user/account/login')
            );
        }

        $form = new ProfileEmailForm();
        $module = Yii::app()->getModule('user');

        if (($data = Yii::app()->getRequest()->getPost('ProfileEmailForm')) !== null) {
            $form->setAttributes($data);
            if ($form->validate()) {
                $oldEmail = $user->email;

                // Если включена верификация при смене почты:
                if ($module->emailAccountVerification && ($oldEmail != $form->email)) {
                    // Вернуть старый email на время проверки
                    $user->email = $oldEmail;
                    if (Yii::app()->userManager->changeUserEmail($user, $form->email)) {
                        Yii::app()->user->setFlash(
                            yupe\widgets\YFlashMessages::SUCCESS_MESSAGE,
                            Yii::t(
                                'UserModule.user',
                                'You need to confirm your e-mail. Please check the mail!'
                            )
                        );
                    }
                } else {
                    $user->email = $form->email;
                    $user->save();
                    Yii::app()->user->setFlash(
                        yupe\widgets\YFlashMessages::SUCCESS_MESSAGE,
                        Yii::t('UserModule.user', 'Email was updated.')
                    );
                }
                $this->controller->redirect(array('/user/account/profile'));
            }
        }
        $this->controller->render('profileEmail', array('model' => $form,));
    }
}
