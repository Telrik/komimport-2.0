<?php
$this->pageTitle = $row['TE_name'] . ' ' . $row['B_name'] . ' ' . $row['M_name'];
$this->breadcrumbs = array('Техника', $row['M_name']);
$this->description = $row['TE_name'] . ' ' . $row['B_name'] . ' ' . $row['M_name'] . ' ' . $row['CONT_name'] . ' ' . $row['CITY_name'];
$this->keywords = '';
?>

<!-- Product Info Starts -->
<div class="row product-info full">
    <!-- Left Starts -->
    <div class="col-sm-4 images-block">
        <?php
        function imageLink($image, $id, $is_thumb = false)
        {
            $s = '';
            $s .= '<a data-rel="shadowbox[gallery_' . $id . ']" href="http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'] . '">';
            $s .= '<img ' . ($is_thumb ? 'width="65"' : '') . ' src="http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file'] . '" alt="product" class="img-responsive thumbnail"/>';
            $s .= '</a>';
            return $s;
        }

        //print_r($row);

        if (count($row['OE_IMAGES']['IMAGES']) > 0) {
            $image = array_shift($row['OE_IMAGES']['IMAGES']);
            echo imageLink($image, $id);
        } else
            if (count($row['M_IMAGES']['IMAGES']) > 0) {
                $image = array_shift($row['M_IMAGES']['IMAGES']);
                echo imageLink($image, $id);
            }
        ?>

        <ul class="list-unstyled list-inline">
            <?php
            if (count($row['OE_IMAGES']['IMAGES']) > 0) {
                foreach ($row['OE_IMAGES']['IMAGES'] as $image) {
                    echo '<li>' . imageLink($image, $id, true) . '</li>';
                    break;
                }
            }

            if (count($row['M_IMAGES']['IMAGES']) > 0) {
                foreach ($row['M_IMAGES']['IMAGES'] as $image) {
                    echo '<li>' . imageLink($image, $id, true) . '</li>';
                    break;
                }
            }
            //print_r($row);
            ?>
        </ul>
    </div>
    <!-- Left Ends -->
    <!-- Right Starts -->
    <div class="col-sm-8 product-details">
        <div class="panel-smart">
            <!-- Product Name Starts -->
            <h1><?php echo $row['M_name']; ?></h1>
            <!-- Product Name Ends -->
            <hr/>
            <!-- Manufacturer Starts -->
            <ul class="list-unstyled manufacturer">
                <li>
                    <span>Марка:</span> <?php echo $row['B_name']; ?>
                </li>
                <li>
                    <span>Раздел:</span> <?php echo $row['TE_name']; ?>
                </li>
                <li>
                    <span>Наличие:</span> <strong class="label label-info">Да</strong>
                </li>
                <li>
                    <span>Год:</span> <?php echo $row['OE_release_date']; ?>
                </li>
                <li>
                    <span>Состояние:</span> <?php if ($row['OE_working_hours'] == 0) echo '<strong class="label label-success">Новый</strong>'; else echo '<strong class="label label-waring">Б/У</strong>'; ?>
                </li>
                <li>
                    <span>Наработка:</span> <?php echo $row['OE_working_hours']; ?> часов
                </li>
                <li>
                    <span>Страна:</span> <?php echo $row['CONT_name']; ?>
                </li>
                <li>
                    <span>Город:</span> <?php echo $row['CITY_name']; ?>
                </li>
            </ul>
            <!-- Manufacturer Ends -->
            <hr/>
            <!-- Price Starts -->
            <div class="price">
                <span class="price-head">Цена: </span>
                <?php if ($row['PRICE']['RUR'] == 0) { ?>
                    <span class="price-new"><strong class="label label-warning">По запросу</strong></span>
                <?php } else { ?>
                    <span class="price-new"><?php echo round($row['PRICE']['RUR']); ?>&nbsp;<i class="fa fa-rub"></i></span>
                    <span style="color:#808080">Старая цена: </span><span class="price-old"><?php srand($row['OE_id']);
                        $r = rand(105, 135);
                        echo round($row['PRICE']['RUR'] / 100 * $r); ?>&nbsp;<i class="fa fa-rub"></i></span>
                <?php } ?>

                <p class="price-tax"></p>
            </div>
            <!-- Price Ends -->

            <!-- Available Options Starts -->
            <div class="options">
                <!--<h3>Available Options</h3>

                <div class="form-group">
                    <label for="select" class="control-label text-uppercase">Select:</label>
                    <select name="select" id="select" class="form-control">
                        <option value="1" selected>Select</option>
                        <option value="2">Option 1</option>
                        <option value="3">Option 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label text-uppercase">Radio:</label>

                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label text-uppercase">Checkbox:</label>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="" checked>
                            Option two is checked
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label text-uppercase" for="input-quantity">Кол-во:</label>
                    <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control"/>
                </div>-->
                <div class="cart-button button-group">

                    <div class="modal fade" id="myModal_<?php echo $row['OE_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <?php echo CHtml::beginForm(array('//equipment/order'), 'post', array('class' => 'form')); ?>
                        <div style="display:none"><input type="hidden" name="tech_id" value="<?php echo $row['OE_id']; ?>"></div>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Заказать: <?php echo $row['TE_name'] . ' ' . $row['B_name'] . ' ' . $row['M_name']; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="LoginForm_email" class="control-label required">Email <span class="required">*</span></label>
                                                <?php echo CHtml::textField('email', '', array('placeholder' => '', 'required' => "required", 'class' => 'form-control')) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                                    <button type="button" type="submit" class="order_tech btn btn-warning">Заказать</button>
                                </div>
                            </div>
                        </div>
                        <?php echo CHtml::endForm(''); ?>
                    </div>

                    <button type="button" data-toggle="modal" data-target="#myModal_<?php echo $row['OE_id']; ?>" class="btn btn-cart">
                        Заказать сейчас
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
            <!-- Available Options Ends -->

        </div>
    </div>
    <!-- Right Ends -->
</div>
<!-- Product Info Ends -->

<!-- Tabs Starts -->
<div class="tabs-panel panel-smart">
    <!-- Nav Tabs Starts -->
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab-description">Описание</a>
        </li>
        <li>
            <a href="#tab-specification">Технические спецификации</a>
        </li>
    </ul>
    <!-- Nav Tabs Ends -->
    <!-- Tab Content Starts -->
    <div class="tab-content clearfix">
        <!-- Description Starts -->
        <div class="tab-pane active" id="tab-description">
            <p>
                <?php echo $row['OE_caption']; ?>
            </p>
            <hr/>
            <?php
            if (count($row['OE_IMAGES']['OTHERS']) > 0) {
                foreach ($row['OE_IMAGES']['OTHERS'] as $image) {
                    echo '<a title="Брошюра" data-rel="shadowbox;player=iframe" class="btn btn-wishlist" href="http://new.komimport.ru/pdfjs/web/viewer.html?file=' . ('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file']) . '#locale=ru"> <i class="fa fa-file-pdf-o"></i></a>';
                    break;
                }
            } else
                if (count($row['M_IMAGES']['OTHERS']) > 0) {
                    foreach ($row['M_IMAGES']['OTHERS'] as $image) {
                        echo '<a title="Брошюра" data-rel="shadowbox;player=iframe" class="btn btn-wishlist" href="http://new.komimport.ru/pdfjs/web/viewer.html?file=' . ('http://partist.ru/' . $image['F_directory'] . '/' . $image['F_file']) . '#locale=ru"> <i class="fa fa-file-pdf-o"></i></a>';
                        break;
                    }
                }
            ?>
        </div>
        <!-- Description Ends -->
        <!-- Specification Starts -->
        <div class="tab-pane" id="tab-specification">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td colspan="2"><strong>Характеристики</strong></td>
                </tr>
                </thead>
                <tbody>
                <?php
                if (count($row['CHARACTER']) > 0) {
                    foreach ($row['CHARACTER'] as $character) {
                        echo '<tr>';
                        echo '<td>' . $character['name'] . '</td>';
                        echo '<td>' . $character['value'] . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
        <!-- Specification Ends -->
    </div>
    <!-- Tab Content Ends -->
</div>
<!-- Tabs Ends -->

<?php if (count($related) > 0) { ?>
    <!-- Related Products Starts -->
    <div class="product-info-box">
        <h4 class="heading">Похожие товары</h4>
        <!-- Products Row Starts -->
        <div class="row">
            <?php
            foreach ($related as $related_row) {
                echo '<div class="col-md-3 col-sm-6">';
                $this->renderPartial('_details',
                    array(
                        'row' => $related_row,
                    )
                );
                echo '</div>';
            } ?>
        </div>
    </div>
    <!-- Products Row Ends -->
<?php } ?>
<!-- Related Products Ends -->


