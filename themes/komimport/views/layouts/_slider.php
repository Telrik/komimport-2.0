<?php
\Yii::import('ext.partist.partistConnector', true);
$data = \PartistConnector::getOffers();
$chunks = array_chunk($data, 4, true);
set_time_limit(60 * 15);
?>

<section class="products-list">
    <div class="container-nope">
        <!-- Heading Starts -->
        <h2 style="margin-bottom: 30px" class="product-head">Спецпредложения</h2>

        <div id="carousel-offers" class="carousel slide" data-interval="150000" data-ride="carousel">
            <!-- Controls -->
            <a style="top:-30px;position:absolute;height:30px;" class="left carousel-control" href="#carousel-offers" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a style="top:-30px;position:absolute;height:30px;" class="right carousel-control" href="#carousel-offers" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                foreach ($chunks as $chunk) {
                    ?>
                    <div class="item <?php echo $chunk === reset($chunks) ? 'active' : ''; ?>">
                        <div class="row">
                            <!-- Product #1 Starts -->
                            <?php foreach ($chunk as $row) {
                                // print_r($row);

                                ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-col">
                                        <div class="image">
                                            <?php

                                            if (count($row['OE_IMAGES']['IMAGES']) > 0) {
                                                foreach ($row['OE_IMAGES']['IMAGES'] as $image) {
                                                    echo '<img src="http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'] . '" alt="product" class="img-responsive"/>';
                                                    break;
                                                }
                                            } else
                                                if (count($row['M_IMAGES']['IMAGES']) > 0) {
                                                    foreach ($row['M_IMAGES']['IMAGES'] as $image) {
                                                        echo '<img src="http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'] . '" alt="product" class="img-responsive"/>';
                                                        break;
                                                    }
                                                }

                                            ?>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="#"><b><?php echo $row['M_name'] ?></a></b></h4>
                                            <h4 style="font-size: 14px"><?php echo $row['TE_name']; ?>, <?php echo $row['B_name']; ?></h4>

                                            <div class="description">
                                                <?php echo $row['OE_caption']; ?>
                                            </div>
                                            <div class="price">
                                                <span class="price-new"><?php echo $row['PRICE']['RUR']; ?>&nbsp;<i class="fa fa-rub"></i></span>
                                                <br/>
                                                <span class="price-old"><?php echo $row['PRICE']['RUR'] * 1.3; ?>&nbsp;<i class="fa fa-rub"></i></span>
                                            </div>
                                            <div class="cart-button button-group">
                                                <a rel="shadowbox;player=iframe" class="btn btn-wishlist" href="http://komimport.again/pdfjs/web/viewer.html?file=/pdf/29_wa420-3_713.pdf"> <i class="fa fa-file-pdf-o"></i></a>

                                                <?php
                                                /*

                                                 <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                     <i class="fa fa-pdf"></i>
                                                     <?php
                                                     if (count($row['OE_IMAGES']['OTHERS']) > 0) {
                                                         foreach ($row['OE_IMAGES']['OTHERS'] as $image) {
                                                             echo '**http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'];
                                                             break;
                                                         }
                                                     } else
                                                         if (count($row['M_IMAGES']['OTHERS']) > 0) {
                                                             foreach ($row['M_IMAGES']['OTHERS'] as $image) {
                                                                 echo 'http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'];
                                                                 break;
                                                             }
                                                         }
                                                     ?>
                                                 </button>
                                                */
                                                ?>

                                                <button type="button" class="btn btn-cart">
                                                    В корзину
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- Product #1 Ends -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
