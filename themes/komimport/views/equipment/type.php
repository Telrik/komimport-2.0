<?php
//print_r($type);
?>
<!-- Main Heading Starts -->
<h2 class="main-heading2">
    <?php echo $type['TE_name'] ?>
</h2>
<!-- Main Heading Ends -->
<!-- Category Intro Content Starts -->
<div class="row cat-intro">
    <div class="col-sm-3">
        <?php echo '<img src="http://partist.ru/' . $type['F_directory'] . '/' . $type['F_file'] . '" alt="' . $type['TE_name'] . '" class="img-responsive img-thumbnail"/>'; ?>
    </div>
    <div class="col-sm-9 cat-body">
        <p>
            <?php echo $type['GE_name'] ?>
        </p>

        <p>
            <?php echo $type['TE_name'] ?>
        </p>
    </div>
</div>
<!-- Category Intro Content Ends -->
<!-- Product Filter Starts -->
<div class="product-filter">
    <div class="row">
        <div class="col-md-4">
            <div class="display">
                <a href="category-list.html" class="active">
                    <i class="fa fa-th-list" title="List View"></i>
                </a>
                <a href="category-grid.html">
                    <i class="fa fa-th" title="Grid View"></i>
                </a>
            </div>
        </div>
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
    </div>
</div>
<!-- Product Filter Ends -->

<!-- Product List Display Starts -->
<div class="row">
    <?php if (count($data) > 0) foreach ($data as $row) {
        echo '<div class="col-xs-12">';
        $this->renderPartial('//equipment/_details_list',
            array(
                'row' => $row,
            )
        );
        echo '</div>';
    } ?>
</div>
<!-- Product List Display Ends -->
<!-- Pagination & Results Starts -->
<div class="row">
    <!-- Pagination Starts -->
    <div class="col-sm-6 pagination-block">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
    <!-- Pagination Ends -->
    <!-- Results Starts -->
    <div class="col-sm-6 results">
        Showing 1 to 3 of 12 (4 Pages)
    </div>
    <!-- Results Ends -->
</div>
<!-- Pagination & Results Ends -->
