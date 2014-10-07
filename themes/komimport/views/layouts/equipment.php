<?php $this->beginContent('/layouts/default'); ?>
<div class="row">
    <!-- Primary Content Starts -->
    <div class="col-md-9">
        <?php echo $content; ?>
    </div>
    <!-- Primary Content Ends -->
    <!-- Sidebar Starts -->
    <div class="col-md-3">
        <?php $this->widget('application.widgets.EquipmentSideBar'); ?>
    </div>
</div>
<?php $this->endContent(); ?>
