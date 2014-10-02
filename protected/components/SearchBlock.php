<?php
Yii::import('zii.widgets.CPortlet');

class SearchBlock extends CPortlet
{
    protected function renderContent()
    {
        echo CHtml::beginForm(array('//site/search'), 'get', array('class' => 'form-search'));
        ?>
        <div id="search_ya">
            <div class="input-group">
                <?php echo CHtml::textField('q', Yii::app()->getRequest()->getParam('q', '6212611203'), array('placeholder' => 'Поиск по каталожным номерам', 'class' => 'form-control')) ?>

                <span class="input-group-btn">

                   <button class="btn" type="submit">
                       Найти
                   </button>
                </span>
            </div>
            <div class="arrow__corner">
                <div class="arrow__corner-i"></div>
            </div>
        </div>
        <?php
        echo CHtml::endForm('');
    }
}