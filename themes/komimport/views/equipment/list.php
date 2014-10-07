<?php
$this->pageTitle = 'Техника';
$this->breadcrumbs = array('Техника');
$this->description = '';
$this->keywords = '';
?>
<!-- Main Heading Starts -->
<h2 class="main-heading text-center">
    Техника
</h2>
<!-- Main Heading Ends -->

<!-- Category Intro Content Starts -->
<div class="row cat-intro">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-9 cat-body">
        <? if ($current_mark) {
            echo '<h4>' . $current_mark['B_name'] . '</h4>';
        }?>
        <? if ($current_type) {
            echo '<h4>' . $current_type['TE_name'] . '</h4>';
        }?>
    </div>
</div>
<!-- Category Intro Content Ends -->

<!-- Product Filter Starts -->
<div class="product-filter">
    <div class="row">
        <div class="col-md-4">
            <div class="display">
                <a href="/equipment/list?<?php echo http_build_query(array_merge($_GET, array('mode' => 'list'))); ?>" class="<?php echo $mode == 'list' ? 'active' : ''; ?>">
                    <i class="fa fa-th-list" title="List View"></i>
                </a>
                <a href="/equipment/list?<?php echo http_build_query(array_merge($_GET, array('mode' => 'grid'))); ?>" class="<?php echo $mode == 'list' ? '' : 'active'; ?>">
                    <i class="fa fa-th" title="Grid View"></i>
                </a>
            </div>
        </div>
        <!--
        <div class="col-md-2 text-right">
            <label class="control-label">Sort</label>
        </div>
        <div class="col-md-3 text-right">
            <select class="form-control">
                <option value="default" selected="selected">Default</option>
                <option value="NAZ">Name (A - Z)</option>
                <option value="NZA">Name (Z - A)</option>
            </select>
        </div>
        <div class="col-md-1 text-right">
            <label class="control-label">Show</label>
        </div>
        <div class="col-md-2 text-right">
            <select class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3" selected="selected">3</option>
            </select>
        </div>
        -->
    </div>
</div>
<!-- Product Filter Ends -->

<!-- Product List Display Starts -->
<div class="row">
    <?php if (count($data) > 0) {

        if ($mode == 'list') {
            foreach ($data as $row) {
                echo '<div class="col-xs-12">';
                $this->renderPartial('//equipment/_details_list',
                    array(
                        'row' => $row,
                    )
                );
                echo '</div>';
            }
        } else {
            $chunks = array_chunk($data, 3, true);
            foreach ($chunks as $chunk) {
                echo '<div class="row">';
                foreach ($chunk as $row) {
                    echo '<div class="col-md-4 col-sm-6">';
                    $this->renderPartial('//equipment/_details',
                        array(
                            'row' => $row,
                        )
                    );
                    echo '</div>';
                }
                echo '</div>';
            }
        }
    }?>
</div>
<!-- Product List Display Ends -->

<!-- Pagination & Results Starts -->
<div class="row">
    <!-- Pagination Starts -->
    <div class="col-sm-6 pagination-block">
        <?php
        \Yii::import('ext.pagination.Pagination', true);
        $pagination = (new Pagination());
        $pagination->setCurrent($pager['page']);
        $pagination->setTotal($pager['pages']);
        $pagination->setCrumbs(10);
        $pagination->setRPP($pager['num_on_page']);

        echo $markup = $pagination->parse();
        ?>
    </div>
    <!-- Pagination Ends -->
    <!-- Results Starts -->
    <div class="col-sm-6 results">
        Всего предложений: <?php echo $pager['num_records']; ?>
    </div>
    <!-- Results Ends -->
</div>
<!-- Pagination & Results Ends -->
