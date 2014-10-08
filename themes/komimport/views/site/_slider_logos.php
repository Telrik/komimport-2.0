<?php
/**
 * Created by PhpStorm.
 * User: Tel
 * Date: 10/8/14
 * Time: 7:49 PM
 */
$files = glob('images/logo/public/*.jpg');
shuffle($files);
$chunks = array_chunk($files, 6, true);
?>

<!-- Controls -->
<button href="#carousel-offers-special1" role="button" data-slide="prev" style="margin-top:-30px;margin-right: 60px;" class="btn-xs pull-right btn"><span class="glyphicon glyphicon-chevron-left"></span></button>
<button href="#carousel-offers-special1" role="button" data-slide="next" style="margin-top:-30px" class="btn-xs pull-right btn"><span class="glyphicon glyphicon-chevron-right"></span></button>
<div style="background-color: #FFF;" id="carousel-offers-special1" class="carousel slide" data-interval="10000" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php foreach ($chunks as $chunk) { ?>
            <div class="item <?php echo $chunk === reset($chunks) ? 'active' : ''; ?>">
                <div class="row">
                    <?php foreach ($chunk as $file) { ?>
                        <div class="col-md-2 col-sm-4">
                            <div style="min-height:45px;background: none repeat scroll 0 0 #fff; border: 0px solid #e8e8e8;margin-bottom: 0px;padding: 5px 5px 3px 3px" class="product-col">
                                <img style="" valign="middle" src="<?php echo $file; ?>"/>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



