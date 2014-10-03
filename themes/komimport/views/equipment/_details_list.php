<div class="product-col list clearfix">
    <div class="row">
        <div class="col-xs-3">
            <div class="image">
                <a href="/equipment/view/<?php echo $row['OE_id']; ?>">
                    <?php
                    if (count($row['OE_IMAGES']['IMAGES']) > 0) {
                        $image = array_shift($row['OE_IMAGES']['IMAGES']);
                        echo '<img width="180" src="http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'] . '" alt="product" class="img-responsive"/>';
                    } else
                        if (count($row['M_IMAGES']['IMAGES']) > 0) {
                            $image = array_shift($row['M_IMAGES']['IMAGES']);
                            echo '<img width="180" src="http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'] . '" alt="product" class="img-responsive"/>';
                        } else {
                            echo '<img width="180" src="http://partist.ru/' . $row['F_directory'] . '/' . $row['F_file'] . '" alt="product" class="img-responsive"/>';
                        }
                    ?>
                </a>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="caption">
                <h4><a href="/equipment/view/<?php echo $row['OE_id']; ?>"><b><?php echo $row['M_name'] ?></a></b></h4>
                <h4 style="font-size: 14px"><?php echo $row['TE_name']; ?>, <?php echo $row['B_name']; ?></h4>

                <div class="description">
                    <?php echo $row['OE_caption']; ?>
                </div>
                <div class="price">
                    <?php if ($row['PRICE']['RUR'] == 0) { ?>
                        <span class="price-new"><strong class="label label-warning">По запросу</strong></span>
                    <?php } else { ?>
                        <span class="price-new"><?php echo round($row['PRICE']['RUR']); ?>&nbsp;<i class="fa fa-rub"></i></span>

                        <span class="price-old"><?php echo round($row['PRICE']['RUR'] * 1.3); ?>&nbsp;<i class="fa fa-rub"></i></span>
                    <?php } ?>
                </div>
                <div class="cart-button button-group">
                    <a title="Брошюра" rel="shadowbox;player=iframe" class="btn btn-wishlist" href="http://komimport.again/pdfjs/web/viewer.html?file=/pdf/29_wa420-3_713.pdf"> <i class="fa fa-file-pdf-o"></i></a>
                    <button type="button" class="btn btn-cart">
                        В корзину
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>