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
        $groups = \PartistConnector::getGroups();
        print_r($groups);


        echo CHtml::beginForm(array('//equipment'), 'get', array('class' => 'form-search'));
        ?>
        <!-- Sidebar Starts -->
        <!-- Shopping Options Starts -->
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