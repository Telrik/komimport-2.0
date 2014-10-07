<?php
//print_r($this);
$this->pageTitle = Yii::t('UserModule.user', 'Sign up');
$this->breadcrumbs = array(Yii::t('UserModule.user', 'Sign up'));
?>

<?php //$this->beginContent('//layouts/default'); ?>

<?php $this->widget('yupe\widgets\YFlashMessages'); ?>

<?php $form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id' => 'social-registration-form',
        'type' => 'vertical',
        //'inlineErrors' => true,
        'htmlOptions' => array(
            'class' => 'well',
        )
    )
); ?>

<?php echo $form->errorSummary($model); ?>


    <div class='row'>
        <div class="col-sm-6">
            <?php echo $form->textFieldGroup($model, 'nick_name'); ?>
        </div>
    </div>

<?php if (!isset($authData['email'])): { ?>
    <div class='row'>
        <div class="col-sm-6">
            <?php echo $form->textFieldGroup($model, 'email'); ?>
        </div>
    </div>
<?php } endif; ?>

    <div class="row">
        <div class="col-sm-6">
            <?php
            $this->widget(
                'bootstrap.widgets.TbButton',
                array(
                    'buttonType' => 'submit',
                    'context' => 'primary',
                    'label' => Yii::t('UserModule.user', 'Sign up'),
                )
            ); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>
    <!-- form -->



<?php echo $content; ?>
<?php //$this->endContent(); ?>