<?php $this->beginContent('/layouts/default'); ?>
<div class="row">
    <!-- Primary Content Starts -->
    <div class="col-md-9">
        <!-- Breadcrumb Starts -->
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            array(
                'links' => $this->breadcrumbs,
            )
        );?>
        <!-- Breadcrumb Ends -->
        <?php echo $content; ?>
        <!-- Primary Content Ends -->
    </div>
    <!-- Sidebar Starts -->
    <div class="col-md-3">
        <?php $this->widget('application.widgets.EquipmentSideBar'); ?>
    </div>
</div>
<?php $this->endContent(); ?>
