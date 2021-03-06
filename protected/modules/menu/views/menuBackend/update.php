<?php
/**
 * Файл представления menu/update:
 *
 * @category YupeViews
 * @package  yupe
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.1
 * @link     http://yupe.ru
 *
 **/
$this->breadcrumbs = array(
    Yii::t('MenuModule.menu', 'Menu') => array('/menu/menuBackend/index'),
    $model->name                      => array('/menu/menuBackend/view', 'id' => $model->id),
    Yii::t('MenuModule.menu', 'Edit'),
);

$this->pageTitle = Yii::t('MenuModule.menu', 'Menu - edit');

$this->menu = array(
    array(
        'label' => Yii::t('MenuModule.menu', 'Menu'),
        'items' => array(
            array(
                'icon'  => 'glyphicon glyphicon-list-alt',
                'label' => Yii::t('MenuModule.menu', 'Manage menu'),
                'url'   => array('/menu/menuBackend/index')
            ),
            array(
                'icon'  => 'glyphicon glyphicon-plus-sign',
                'label' => Yii::t('MenuModule.menu', 'Create menu'),
                'url'   => array('/menu/menuBackend/create')
            ),
            array('label' => Yii::t('MenuModule.menu', 'Menu') . ' «' . $model->name . '»'),
            array(
                'icon'  => 'glyphicon glyphicon-pencil',
                'label' => Yii::t('MenuModule.menu', 'Change menu'),
                'url'   => array(
                    '/menu/menuBackend/update',
                    'id' => $model->id
                )
            ),
            array(
                'icon'  => 'glyphicon glyphicon-eye-open',
                'label' => Yii::t('MenuModule.menu', 'View menu'),
                'url'   => array(
                    '/menu/menuBackend/view',
                    'id' => $model->id
                )
            ),
            array(
                'icon'        => 'glyphicon glyphicon-trash',
                'label'       => Yii::t('MenuModule.menu', 'Remove menu'),
                'url'         => '#',
                'linkOptions' => array(
                    'submit'  => array('/menu/menuBackend/delete', 'id' => $model->id),
                    'confirm' => Yii::t('MenuModule.menu', 'Do you really want to remove menu?'),
                    'params'  => array(Yii::app()->getRequest()->csrfTokenName => Yii::app()->getRequest()->csrfToken),
                ),
            ),
        )
    ),
    array(
        'label' => Yii::t('MenuModule.menu', 'Menu items'),
        'items' => array(
            array(
                'icon'  => 'glyphicon glyphicon-list-alt',
                'label' => Yii::t('MenuModule.menu', 'Manage menu items'),
                'url'   => array('/menu/menuitemBackend/index')
            ),
            array(
                'icon'  => 'glyphicon glyphicon-plus-sign',
                'label' => Yii::t('MenuModule.menu', 'Create menu item'),
                'url'   => array('/menu/menuitemBackend/create')
            ),
        )
    ),
); ?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('MenuModule.menu', 'Edit menu'); ?><br/>
        <small>&laquo;<?php echo $model->name; ?>&raquo;</small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
