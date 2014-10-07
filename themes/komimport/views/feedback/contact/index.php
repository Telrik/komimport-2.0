<?php
$this->pageTitle = Yii::t('FeedbackModule.feedback', 'Contacts');
$this->breadcrumbs = array(Yii::t('FeedbackModule.feedback', 'Contacts'));
$this->layout = '//layouts/default';
Yii::import('application.modules.feedback.FeedbackModule');
Yii::import('application.modules.install.InstallModule');
//<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>

?>


<!-- Main Heading Starts -->
<h1 class="main-heading text-center">
    <?php echo Yii::t('FeedbackModule.feedback', 'Contacts'); ?>
</h1>
<!-- Main Heading Ends -->

<?php $this->widget('yupe\widgets\YFlashMessages'); ?>

<!-- Google Map Starts -->
<div id="map-wrapper">
    <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
    <div id="ymaps-map-id_1346839684571708029893" style="width: 100%; height: 250px;"></div>
    <div style="display:none;width: 100%; text-align: right;"><a href="http://api.yandex.ru/maps/tools/constructor/?lang=ru-RU" target="_blank" style="color: #1A3DC1; font: 13px Arial,Helvetica,sans-serif;">Создано с помощью инструментов
            Яндекс.Карт</a></div>
    <script type="text/javascript">function fid_1346839684571708029893(ymaps) {
            var map = new ymaps.Map("ymaps-map-id_1346839684571708029893", {center: [37.62318465344236, 55.705348641660585], zoom: 14, type: "yandex#map"});
            map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
            map.geoObjects.add(new ymaps.Placemark([37.62266006049721, 55.705114831520284], {balloonContent: 'ООО "Комимпорт"'}, {preset: "twirl#darkorangeDotIcon"})).add(new ymaps.Polyline([
                    [37.621253462951636, 55.70551404869831],
                    [37.62151095501708, 55.70418125273197],
                    [37.62151095501708, 55.70355118783552],
                    [37.62112471691893, 55.70139434999674],
                    [37.62065264813232, 55.70044918113947],
                    [37.62026641003417, 55.69974634839031],
                    [37.620051833312985, 55.69914044790197],
                    [37.62009474865722, 55.6983164081],
                    [37.62163970104979, 55.690378072432594],
                    [37.62082430950927, 55.69023868261859],
                    [37.620867224853505, 55.69019019907966],
                    [37.62198302380371, 55.69040837449519],
                    [37.62050244442748, 55.69856483370088],
                    [37.62045952908324, 55.699110152629935],
                    [37.620588275115956, 55.6996191100702],
                    [37.62127492062377, 55.700915709662304],
                    [37.62194010845947, 55.7036662966071],
                    [37.62191865078734, 55.704114611734994],
                    [37.62204739682005, 55.704296359639756],
                    [37.62191865078734, 55.70484159826068],
                    [37.62247655026244, 55.705156621537114]
                ], {balloonContent: ""}, {strokeColor: "ff0000", strokeWidth: 5, strokeOpacity: 0.8})).add(new ymaps.Polyline([
                    [37.62708994976804, 55.705518267691396],
                    [37.62457940213012, 55.7057969374122],
                    [37.62417170635985, 55.705966561482505],
                    [37.62279841534423, 55.706124068885686],
                    [37.62262675396728, 55.706293691529886],
                    [37.622540923278784, 55.70687524926759],
                    [37.6223263465576, 55.707335642978634],
                    [37.62146803967284, 55.70768699240875],
                    [37.62138220898437, 55.70806256932547],
                    [37.62138220898437, 55.708474488226614],
                    [37.6217469894104, 55.71001308790577],
                    [37.62462231747435, 55.709770792780354],
                    [37.6243433677368, 55.70797776195149],
                    [37.624793978851294, 55.70594232951773],
                    [37.62481543652343, 55.70568789297653],
                    [37.62462231747435, 55.70542133862504],
                    [37.62361380688475, 55.7054698031884],
                    [37.62286278836055, 55.70532440931098]
                ], {balloonContent: ""}, {strokeColor: "b832fd", strokeWidth: 5, strokeOpacity: 0.8}));
        }
        ;</script>
    <script type="text/javascript" src="http://api-maps.yandex.ru/2.0/?coordorder=longlat&load=package.full&wizard=constructor&lang=ru-RU&onload=fid_1346839684571708029893"></script>
    <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->

    <div id="map-block-none"></div>
</div>
<!-- Google Map Ends -->
<!-- Starts -->
<div class="row">
<!-- Contact Details Starts -->
<div class="col-sm-4">
    <div class="panel panel-smart">
        <div class="panel-heading">
            <h3 class="panel-title">Контактная информация</h3>

        </div>
        <div class="panel-body">
            <ul class="list-unstyled contact-details">
                <li class="clearfix">
                    <i class="fa fa-home pull-left"></i>
                    <span class="pull-left">
                        KOMIMPORT LTD <br/>
                        115191, г. Москва, ул. Большая Тульская, <br/>
                        д. 43, офис 311,312
                    </span>
                </li>
                <li class="clearfix">
                    <i class="fa fa-comment pull-left"></i>
                    <span class="pull-left">
                         График работы: <br/>
                         пн-чт 9.00-18.00; пт 9.00-17.00; <br/>
                         сб, вс Выходой
                    </span>
                </li>
                <li class="clearfix">
                    <i class="fa fa-phone pull-left"></i>
                    <span class="pull-left">
                        (495) 651-61-19 <br/>
                        8-800-555-61-19
                    </span>
                </li>
                <li class="clearfix">
                    <i class="fa fa-envelope-o pull-left"></i>
                    <span class="pull-left">
                        zakaz@komimport.ru <br/>
                        komatsu@komimport.ru
                    </span>
                </li>

                <li class="clearfix">
                    <i class="fa fa-skype pull-left"></i>
                    <span class="pull-left">
                        julia.komimport
                    </span>
                </li>


                <li class="clearfix">
                    <i class="fa fa-trophy pull-left"></i>
                    <span class="pull-left">
                         Метро Тульская, 1 вагон из центра, <br/>
                         2 раза направо, ООО "Комимпорт", <br/>
                         3 этаж, офис № 311, 312
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Contact Details Ends -->
<!-- Contact Form Starts -->
<div class="col-sm-8">
    <div class="panel panel-smart form">
        <div class="panel-heading">
            <h3 class="panel-title">Пришлите вашу заявку</h3>
        </div>
        <br/>
        <?php $form = $this->beginWidget(
            'bootstrap.widgets.TbActiveForm',
            array(
                'id' => 'feedback-form',
                'type' => 'horizontal',
                //'type' => 'horisontal',
                'htmlOptions' => array( //'class' => 'well',
                )
            )
        ); ?>


        <?php echo $form->errorSummary($model); ?>

        <?php if ($model->type): ?>
            <div class='row'>
                <div class="col-sm-12">
                    <?php echo $form->dropDownListGroup(
                        $model,
                        'type',
                        array(
                            'widgetOptions' => array(
                                'data' => $module->getTypes(),
                            ),
                        )
                    ); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class='row'>
            <div class="col-sm-12">
                <?php echo $form->textFieldGroup($model, 'name'); ?>
            </div>
        </div>

        <div class='row'>
            <div class="col-sm-12">
                <?php echo $form->textFieldGroup($model, 'email'); ?>
            </div>
        </div>

        <div class='row'>
            <div class="col-sm-12">
                <?php echo $form->textFieldGroup($model, 'theme'); ?>
            </div>
        </div>

        <div class='row'>
            <div class="col-sm-12">
                <?php echo $form->textAreaGroup(
                    $model,
                    'text',
                    array('widgetOptions' => array('htmlOptions' => array('rows' => 5)))
                ); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">

                    </div>

                    <div class="col-sm-9">
                        <?php if ($module->showCaptcha && !Yii::app()->user->isAuthenticated()): ?>
                            <?php if (CCaptcha::checkRequirements()): ?>
                                <?php $this->widget(
                                    'CCaptcha',
                                    array(
                                        'showRefreshButton' => true,
                                        'imageOptions' => array(
                                            'width' => '150',
                                        ),
                                        'buttonOptions' => array(
                                            'class' => 'btn btn-danger',
                                        ),
                                        'buttonLabel' => '<i class="glyphicon glyphicon-repeat"></i>',
                                    )
                                ); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">

                    </div>

                    <div class="col-sm-12">
                        <?php if ($module->showCaptcha && !Yii::app()->user->isAuthenticated()): ?>
                            <?php if (CCaptcha::checkRequirements()): ?>
                                <?php echo $form->textFieldGroup(
                                    $model,
                                    'verifyCode',
                                    array(
                                        'widgetOptions' => array(
                                            'htmlOptions' => array(
                                                'placeholder' => Yii::t(
                                                        'FeedbackModule.feedback',
                                                        'Insert symbols you see on image'
                                                    )
                                            ),
                                        ),
                                    )
                                ); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">

                    </div>

                    <div class="col-sm-9">
                        <?php
                        $this->widget(
                            'bootstrap.widgets.TbButton',
                            array(
                                //'type' => 'danger',
                                'icon' => 'check',
                                'buttonType' => 'submit',
                                'context' => 'warning',
                                'label' => Yii::t('FeedbackModule.feedback', 'Send message'),
                            )
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">

            </div>
        </div>



        <?php $this->endWidget(); ?>
    </div>

</div>
<!-- Contact Form Ends -->
</div>
<!-- Ends -->
</div>
<!-- Main Container Ends -->

