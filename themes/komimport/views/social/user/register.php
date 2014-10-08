<?php
//print_r($this);
$this->pageTitle = Yii::t('UserModule.user', 'Sign up');
$this->breadcrumbs = array(Yii::t('UserModule.user', 'Sign up'));

$model->email = $authData['email'];
$model->nick_name = str_replace(' ', '', $authData['info']['name']);
?>

<?php
//echo '<pre>' . print_r($authData, true) . '</pre>';
//$this->beginContent('//layouts/default');
?>

<?php $this->widget('yupe\widgets\YFlashMessages'); ?>

<?php $form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id' => 'social-registration-form',
        'type' => 'vertical',
        //'inlineErrors' => true,
        'htmlOptions' => array( //'class' => 'well',
        )
    )
); ?>

    <div>
        <?php echo $form->errorSummary($model); ?>
    </div>

    <div class="alert alert-info">
        <div class='row'>
            <div class="col-sm-2">
                <img height="100" src="<?php echo $authData['info']['picture']; ?>"/>
            </div>
            <div class="col-sm-6">
                <ul>
                    <li><?php echo $authData['info']['name']; ?></li>
                    <li><?php echo $authData['info']['email']; ?></li>
                    <li><?php echo $authData['info']['gender']; ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class='row'>
        <div class="col-sm-6">
            <?php echo $form->textFieldGroup($model, 'nick_name'); ?>
        </div>
        <div style="display: none;" class="col-sm-6">
            <?php echo $form->textFieldGroup($model, 'email',
                array(
                    'widgetOptions' => array(
                        'htmlOptions' => array(
                            //'class' => 'disabled',
                            //'disabled' => true
                        )
                    )
                )
            ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <?php
            $this->widget(
                'bootstrap.widgets.TbButton',
                array(
                    'buttonType' => 'submit',
                    'context' => 'success',
                    'label' => Yii::t('UserModule.user', 'Sign up'),
                )
            ); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

<?php echo $content; ?>

<?php //$this->endContent(); ?>