<?php
$data = \PartistConnector::getOffersEquipmentSpecial();
shuffle($data);
$chunks = array_chunk($data, 4, true);
set_time_limit(60 * 15);
?>
<!-- Controls -->
<button href="#carousel-offers-special1" role="button" data-slide="prev" style="margin-top:-30px;margin-right: 60px;" class="btn-xs pull-right btn"><span class="glyphicon glyphicon-chevron-left"></span></button>
<button href="#carousel-offers-special1" role="button" data-slide="next" style="margin-top:-30px" class="btn-xs pull-right btn"><span class="glyphicon glyphicon-chevron-right"></span></button>
 
<div style="background-color: #FFF;" id="carousel-offers-special1" class="carousel slide" data-interval="10000" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/komatsu.jpg"/>
                </div>
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/images.jpg?itok=SYPn9UMD"/>
                </div>
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/imgres.jpg?itok=SYPn9UMD"/>
                </div>
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/imgres_0.jpg?itok=SYPn9UMD"/>
                </div>
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/imgres_1.jpg?itok=SYPn9UMD"/>
                </div>
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/imgres_2.jpg?itok=SYPn9UMD"/>
                </div>

            </div>

        </div>

        <div class="item">
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/imgres_3.jpg?itok=SYPn9UMD"/>
                </div>
                <div class="col-md-2 col-sm-6">
                    <img src="/images/logo/public/imgres_4.jpg?itok=SYPn9UMD"/>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="products-list">
    <div class="container-nope">
        <!-- Heading Starts -->
        <h2 style="margin-bottom: 30px" class="product-head">Спецпредложения</h2>

        <div id="carousel-offers-special" class="carousel slide" data-interval="15000" data-ride="carousel">
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
                <?php } ?>
            </div>
        </div>
    </div>
</section>
