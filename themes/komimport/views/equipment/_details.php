<!-- Equipment Starts -->
<div class="product-col">
    <div class="image">
        <a href="/equipment/view/<?php echo $row['OE_id']; ?>">
            <?php
            if (count($row['OE_IMAGES']['IMAGES']) > 0) {
                $image = array_shift($row['OE_IMAGES']['IMAGES']);

                // echo \Yii::app()->easyImage->thumbOf('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'], array('rotate' => 90));

//echo $image['F_directory'];
                echo '<img src="http://partist.ru/' . str_replace('user_files/', 'user_files/thumbs/', $image['F_directory']) . '/' . $image['F_file'] . '" alt="product" class="img-responsive"/>';
            } else
                if (count($row['M_IMAGES']['IMAGES']) > 0) {
                    $image = array_shift($row['M_IMAGES']['IMAGES']);
                    echo '<img src="http://partist.ru/' . str_replace('user_files/', 'user_files/thumbs/', $image['F_directory']) . '/' . $image['F_file'] . '" alt="product" class="img-responsive"/>';
                } else {
                    echo '<img src="http://partist.ru/' . str_replace('user_files/', 'user_files/thumbs/', $row['F_directory']) . '/' . $row['F_file'] . '" alt="product" class="img-responsive"/>';
                }
            //print_r($image);
            //echo $image['F_directory'];
            ?>

        </a>
    </div>
    <div class="caption">
        <h4 style="min-height:35px"><a href="/equipment/view/<?php echo $row['OE_id']; ?>"><b><?php echo $row['M_name'] ?></b></a></h4>
        <h4 style="font-size: 14px"><?php echo $row['TE_name']; ?>, <?php echo $row['B_name']; ?></h4>

        <div class="description">
            <?php echo $row['OE_caption_CUT']; ?>
        </div>
        <div class="price">
            <?php if ($row['PRICE']['RUR'] == 0) { ?>
                <span class="price-new"><strong class="label label-warning">По запросу</strong></span>
            <?php } else { ?>
                <span class="price-new"><?php echo round($row['PRICE']['RUR']); ?>&nbsp;<i class="fa fa-rub"></i></span>

                <span class="price-old"><?php srand($row['OE_id']);
                    $r = rand(105, 135);
                    echo round($row['PRICE']['RUR'] / 100 * $r); ?>&nbsp;<i class="fa fa-rub"></i></span>
            <?php } ?>
        </div>
        <div class="cart-button button-group">

            <?php
            //<a title="Брошюра" data-rel="shadowbox;player=iframe" class="btn btn-wishlist" href="http://komimport.again/pdfjs/web/viewer.html?file=/pdf/29_wa420-3_713.pdf"> <i class="fa fa-file-pdf-o"></i></a>
            //print_r($row);
            if (count($row['OE_IMAGES']['OTHERS']) > 0) {
                foreach ($row['OE_IMAGES']['OTHERS'] as $image) {
                    echo '<a title="Брошюра" data-rel="shadowbox;player=iframe" class="btn btn-wishlist" href="http://new.komimport.ru/pdfjs/web/viewer.html?file=' . ('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file']) . '#locale=ru"> <i class="fa fa-file-pdf-o"></i></a>';
                    //echo '**http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'];
                    break;
                }
            } else
                if (count($row['M_IMAGES']['OTHERS']) > 0) {
                    foreach ($row['M_IMAGES']['OTHERS'] as $image) {
                        echo '<a title="Брошюра" data-rel="shadowbox;player=iframe" class="btn btn-wishlist" href="http://new.komimport.ru/pdfjs/web/viewer.html?file=' . ('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file']) . '#locale=ru"> <i class="fa fa-file-pdf-o"></i></a>';
                        //echo 'http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'];
                        break;
                    }
                }
            ?>



            <button type="button" class="btn btn-cart">
                В корзину
                <i class="fa fa-shopping-cart"></i>
            </button>
        </div>
    </div>
</div>
<!-- Equipment Ends -->