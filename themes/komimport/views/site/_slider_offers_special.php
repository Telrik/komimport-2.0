<?php
$data = \PartistConnector::getOffersEquipmentSpecial();
$chunks = array_chunk($data, 4, true);
set_time_limit(60 * 15);
?>

<section class="products-list">
    <div class="container-nope">
        <!-- Heading Starts -->
        <h2 style="margin-bottom: 30px" class="product-head">Спецпредложения</h2>

        <div id="carousel-offers-special" class="carousel slide" data-interval="150000" data-ride="carousel">
            <!-- Controls -->
            <a style="top:-30px;position:absolute;height:30px;" class="left carousel-control" href="#carousel-offers-special" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a style="top:-30px;position:absolute;height:30px;" class="right carousel-control" href="#carousel-offers-special" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                foreach ($chunks as $chunk) {
                ?>
                <div class="item <?php echo $chunk === reset($chunks) ? 'active' : ''; ?>">
                    <div class="row">

                        <?php foreach ($chunk as $row) {
                            echo '<div class="col-md-3 col-sm-6">';
                            $this->renderPartial('//equipment/_details',
                                array(
                                    'row' => $row,
                                )
                            );
                            echo '</div>';
                        } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
</section>
