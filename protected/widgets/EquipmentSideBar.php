<?php
Yii::import('zii.widgets.CPortlet');
Yii::import('ext.partist.partistConnector', true);

class EquipmentSideBar extends CPortlet
{
    protected function renderContent()
    {
        $special = \PartistConnector::getOffersEquipmentSpecial();
        shuffle($special);
        $bestseller = array_shift($special);

        $brands = \PartistConnector::getBrands();
        //print_r($brands);
        //$groups = \PartistConnector::getGroups();
        //print_r($groups);

        $types = \PartistConnector::getTypesEquipment();

        //print_r($types);
        echo CHtml::beginForm(array('//equipment'), 'get', array('class' => 'form-search'));
        ?>
        <!-- Sidebar Starts -->

        <!-- Categories Links Starts -->
        <h3 class="side-heading">Категории</h3>
        <div class="list-group">
            <?php foreach ($types as $type) {
                ///equipment/type/' . $type['TE_id'] . '
                echo '<a href="/equipment/list?' . http_build_query(array_merge($_GET, array('type' => $type['TE_id']))) . '" class="list-group-item">';
                echo '<i class="fa fa-chevron-right"></i>';
                echo $type['TE_name'];
                echo '</a>';
            }?>
        </div>
        <!-- Categories Links Ends -->

        <!-- Brands Links Starts -->
        <h3 class="side-heading">Марки</h3>
        <div class="list-group">
            <?php foreach ($brands as $brand) {
                if ($brand['B_name'] == '') continue;
                //echo '<a href="/equipment/brand/' . $brand['B_id'] . '" class="list-group-item">';
                echo '<a href="/equipment/list?' . http_build_query(array_merge($_GET, array('mark' => $brand['B_id']))) . '" class="list-group-item">';
                echo '<i class="fa fa-chevron-right"></i>';
                echo $brand['B_name'];
                echo '</a>';
            }?>
        </div>
        <!-- Brands Links Ends -->

        <?php
        /*
         *         <!-- Shopping Options Starts -->
                <h3 class="side-heading">Фильтр</h3>
                <div class="list-group">
                    <div class="list-group-item">
                        Марка
                    </div>
                    <div class="list-group-item">
                        <div class="filter-group">
                            <?php
                            foreach ($brands as $brand) {
                                if ($brand['B_name'] == '') continue;
                                echo '<label class="checkbox">';
                                echo '<input name="filterBrands" type="checkbox" value="' . $brand['B_id'] . '" ' . ($brand['B_id'] == 1 ? 'checked="checked"' : '') . ' />';
                                echo $brand['B_name'];
                                echo '</label>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="list-group-item">
                        Manufacturer
                    </div>
                    <div class="list-group-item">
                        <div class="filter-group">
                            <label class="radio">
                                <input name="filter-manuf" type="radio" value="mr1" checked="checked"/>
                                Manufacturer Name 1
                            </label>
                            <label class="radio">
                                <input name="filter-manuf" type="radio" value="mr2"/>
                                Manufacturer Name 2
                            </label>
                            <label class="radio">
                                <input name="filter-manuf" type="radio" value="mr3"/>
                                Manufacturer Name 3
                            </label>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <button type="button" class="btn btn-warning">Filter</button>
                    </div>
                </div>
                <!-- Shopping Options Ends -->
         */
        ?>

        <!-- Bestsellers Links Starts -->
        <h3 class="side-heading">Хит продаж</h3>
        <?php
        Yii::app()->controller->renderPartial('//equipment/_details',
            array(
                'row' => $bestseller,
            )
        );
        ?>
        <!-- Bestsellers Links Ends -->
        <!-- Sidebar Ends -->
        <?php
        echo CHtml::endForm('');
    }
}