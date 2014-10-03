<?php $this->beginContent('/layouts/default'); ?>
<!-- Breadcrumb Starts -->
<?php $this->widget(
    'bootstrap.widgets.TbBreadcrumbs',
    array(
        'links' => $this->breadcrumbs,
    )
);?>
<!-- Breadcrumb Ends -->

<?php echo $content; ?>
<?php $this->endContent(); ?>