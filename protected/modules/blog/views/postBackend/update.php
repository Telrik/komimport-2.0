<?php
/**
 * Отображение для postBackend/update:
 *
 * @category YupeView
 * @package  yupe
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 **/
$this->breadcrumbs = array(
    Yii::t('BlogModule.blog', 'Posts') => array('/blog/postBackend/index'),
    $model->title                      => array('/blog/postBackend/view', 'id' => $model->id),
    Yii::t('BlogModule.blog', 'Edit'),
);

$this->pageTitle = Yii::t('BlogModule.blog', 'Posts - edit');

$this->menu = array(
    array(
        'label' => Yii::t('BlogModule.blog', 'Blogs'),
        'items' => array(
            array(
                'icon'  => 'glyphicon glyphicon-list-alt',
                'label' => Yii::t('BlogModule.blog', 'Manage blogs'),
                'url'   => array('/blog/blogBackend/index')
            ),
            array(
                'icon'  => 'glyphicon glyphicon-plus-sign',
                'label' => Yii::t('BlogModule.blog', 'Add a blog'),
                'url'   => array('/blog/blogBackend/create')
            ),
        )
    ),
    array(
        'label' => Yii::t('BlogModule.blog', 'Posts'),
        'items' => array(
            array(
                'icon'  => 'glyphicon glyphicon-list-alt',
                'label' => Yii::t('BlogModule.blog', 'Manage posts'),
                'url'   => array('/blog/postBackend/index')
            ),
            array(
                'icon'  => 'glyphicon glyphicon-plus-sign',
                'label' => Yii::t('BlogModule.blog', 'Add a post'),
                'url'   => array('/blog/postBackend/create')
            ),
            array('label' => Yii::t('BlogModule.blog', 'Post') . ' «' . mb_substr($model->title, 0, 32) . '»', 'utf-8'),
            array(
                'icon'  => 'glyphicon glyphicon-pencil',
                'label' => Yii::t('BlogModule.blog', 'Edit posts'),
                'url'   => array(
                    '/blog/postBackend/update',
                    'id' => $model->id
                )
            ),
            array(
                'icon'  => 'glyphicon glyphicon-comment',
                'label' => Yii::t('BlogModule.blog', 'Comments'),
                'url'   => array(
                    '/comment/commentBackend/index',
                    'Comment[model_id]' => $model->id,
                    'Comment[model]'    => 'Post'

                )
            ),
            array(
                'icon'  => 'glyphicon glyphicon-eye-open',
                'label' => Yii::t('BlogModule.blog', 'View post'),
                'url'   => array(
                    '/blog/postBackend/view',
                    'id' => $model->id
                )
            ),
            array(
                'icon'        => 'glyphicon glyphicon-trash',
                'label'       => Yii::t('BlogModule.blog', 'Remove post'),
                'url'         => '#',
                'linkOptions' => array(
                    'submit'  => array('/blog/postBackend/delete', 'id' => $model->id),
                    'confirm' => Yii::t('BlogModule.blog', 'Do you really want to delete selected post?'),
                    'params'  => array(Yii::app()->getRequest()->csrfTokenName => Yii::app()->getRequest()->csrfToken),
                )
            ),
        )
    ),
    array(
        'label' => Yii::t('BlogModule.blog', 'Members'),
        'items' => array(
            array(
                'icon'  => 'glyphicon glyphicon-list-alt',
                'label' => Yii::t('BlogModule.blog', 'Manage members'),
                'url'   => array('/blog/userToBlogBackend/index')
            ),
            array(
                'icon'  => 'glyphicon glyphicon-plus-sign',
                'label' => Yii::t('BlogModule.blog', 'Add a member'),
                'url'   => array('/blog/userToBlogBackend/create')
            ),
        )
    ),
);
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('BlogModule.blog', 'Edit post'); ?><br/>
        <small>&laquo;<?php echo $model->title; ?>&raquo;</small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
