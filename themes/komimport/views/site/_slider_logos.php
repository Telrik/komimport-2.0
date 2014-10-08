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
                        <div class="col-md-2 col-sm-6">
                            <img src="<?php echo $file; ?>"/>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



