<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php echo Yii::app()->charset; ?>"/>
    <meta name="keywords" content="<?php echo CHtml::encode($this->keywords); ?>"/>
    <meta name="description" content="<?php echo CHtml::encode($this->description); ?>"/>
    <meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>"/>
    <meta property="og:description" content="<?php echo CHtml::encode($this->description); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $mainAssets = Yii::app()->getTheme()->getAssetsUrl();
    Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/main.css');
    Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/flags.css');
    Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/yupe.css');
    Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/jquery.li-translit.js');
    Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/comments.js');
    ?>

    <script type="text/javascript">
        var yupeTokenName = '<?php echo Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?php echo Yii::app()->getRequest()->csrfToken;?>';
    </script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- CSS Files -->
    <?php Yii::app()->clientScript->registerCssFile('/css/style.css'); ?>
    <?php Yii::app()->clientScript->registerCssFile('/css/responsive.css'); ?>
    <?php //Yii::app()->clientScript->registerCssFile('/css/magnific-popup.css'); ?>
    <?php Yii::app()->clientScript->registerCssFile('/css/shadowbox/shadowbox.css'); ?>


    <?php Yii::app()->clientScript->registerCssFile('/css/skin/default.css'); ?>
    <?php Yii::app()->clientScript->registerCssFile('/css/skin/komimport.css'); ?>


    <!-- Google Web Fonts Local-->
    <?php //Yii::app()->clientScript->registerCssFile('/css/google-fonts.css'); ?>


    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>


    <?php Yii::app()->clientScript->registerScriptFile('/js/bootstrap-hover-dropdown.min.js'); ?>
    <?php //Yii::app()->clientScript->registerScriptFile('/js/jquery.magnific-popup.min.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/js/shadowbox.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/js/readmore.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/js/custom.js'); ?>

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/ie8-responsive-file-warning.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="/images/fav-57.png">
    <link rel="shortcut icon" href="/images/fav.png">

    <style>
        div.product-col div.description {
            min-height: 80px;
            /*max-height: 50px;*/
        }

        .product-col > .image {
            min-height: 153px;

        }

        .product-col > .image img {
            max-height: 175px;
            margin: auto;
        }

        .search-name {
            text-transform: uppercase;
        }

        a.readmore {
            color: #8b8b8b;
        }

        a.readmore:hover {
            border-bottom: dashed 1px #7c7c7c;
            text-decoration: none;
        }

        .ymaps-copyright-agreement {
            display: none !important;
        }

        .btn-wishlist {
            border-radius: 0;
        }

        .btn-wishlist {
            background: none repeat scroll 0 0 #2f353b;
            color: #fff;
            margin-right: 3px;
        }

        .btn-wishlist:hover, .btn-wishlist:focus {
            color: #FFF;
            text-decoration: none;
        }

        h4.lead {
            font-weight: bold;
            line-height: 1.3;
        }

        /*
        .readmore:hover, .readless:hover {
            text-decoration: none;
        }

        .readmore, .readless {
            /*font-size: 12px;display: inline !important;

            text-align: right;
        }

        .readmore-js-collapsed {
            min-height: 20px !important;
        }



        .rmore {
            display: none;
        }
*/

    </style>
</head>
<body>

<!-- Header Section Starts -->
<header id="header-area">
    <!-- Header Top Starts -->
    <div class="header-links">
        <?php if (Yii::app()->hasModule('menu')): { ?>
            <?php $this->widget('application.modules.menu.widgets.MenuWidget', array('name' => 'header-menu')); ?>
        <?php } endif; ?>
    </div>
    <!-- Header Top Ends -->

    <!-- Starts -->
    <div class="container">
        <!-- Main Header Starts -->
        <div class="main-header">
            <div class="row" style="margin-right:0px">
                <!-- Logo Starts -->
                <div class="col-md-3">
                    <div id="logo">
                        <a href="/"><img src="/images/logo.png" title="KOMIMPORT" alt="Spice Shoppe" class="img-responsive"/></a>
                    </div>
                </div>
                <!-- Logo Ends -->

                <div style="margin-bottom: 15px;background: url('http://subtlepatterns.com/patterns/carbon_fibre.png') repeat scroll 0% 0% transparent;" class="col-md-3 well wellSuper3">
                    <br/>
                </div>

                <div style="" class="col-md-2">
                    <h4 style="margin: 0 ;display: block;white-space: nowrap;" class="lead lead-test">
                        <i class="fa fa-phone"></i>&nbsp;<span data-toggle="tooltip" data-placement="left" title="Прием звонков: пн-пт 7.00 - 18.00">8-495-651-61-19</span>
                    </h4>
                    <h4 style="margin: 0;white-space: nowrap;" class="lead lead-test">
                        <i class="fa fa-phone"></i>&nbsp;<span data-toggle="tooltip" data-placement="left" title="Бесплатный по России">8-800-555-61-19</span>
                    </h4>
                </div>

                <div class="col-md-2">
                    <p style="white-space: nowrap;">
                        <i class="fa fa-envelope"></i> <a href="mailto:zakaz@komimport.ru">zakaz@komimport.ru</a>
                    </p>

                    <p style="white-space: nowrap;" class="skype-contact">
                        <i class="fa fa-skype"></i> <a href="skype:julia.komimport@?chat">julia.komimport</a>
                    </p>
                </div>
                <div style="margin-bottom: 2px;background: url('http://subtlepatterns.com/patterns/carbon_fibre.png') repeat scroll 0% 0% transparent;" class="col-md-2 well wellSuper2">
                    <br/>
                </div>
            </div>

            <div class="row" style="margin-right:0px">
                <div class="col-md-3">
                    <p style="font-size:12px">Продажа запчастей и техники komatsu, caterpillar, yetsan. Ремонт, восстановление.</p>
                </div>

                <!-- Search Starts -->
                <div style="padding-left:0px" class="col-md-6">

                    <?php $this->widget('application.widgets.SearchBlock'); ?>

                </div>
                <!-- Search Ends -->

                <div style="margin-bottom: 2px;background: url('http://subtlepatterns.com/patterns/carbon_fibre.png') repeat scroll 0% 0% transparent;" class="col-md-3 well well-sm wellSuper1">


                    <div id="cart-new" class="pull-right btn-group btn-block">

                        <button type="button" data-toggle="dropdown" class="btn-xs btn btn-block btn-lg btn-warning dropdown-toggle">
                            <i class="fa fa-shopping-cart"></i>

                            <span class="hidden-md">Корзина</span>
                            <i class="fa fa-caret-down"></i>
                            <!--<span id="cart-total">2 item(s) - $340.00</span>
                            <i class="fa fa-caret-down"></i>-->
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <table class="table table-striped hcart">
                                    <tr>
                                        <td class="text-center">
                                            <a href="product.html">
                                                <img src="/images/product-images/hcart-thumb1.jpg" alt="image" title="image" class="img-thumbnail img-responsive"/>
                                            </a>
                                        </td>
                                        <td class="text-left">
                                            <a href="product-full.html">
                                                Seeds
                                            </a>
                                        </td>
                                        <td class="text-right">x 1</td>
                                        <td class="text-right">$120.68</td>
                                        <td class="text-center">
                                            <a href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <a href="product.html">
                                                <img src="/images/product-images/hcart-thumb2.jpg" alt="image" title="image" class="img-thumbnail img-responsive"/>
                                            </a>
                                        </td>
                                        <td class="text-left">
                                            <a href="product-full.html">
                                                Organic
                                            </a>
                                        </td>
                                        <td class="text-right">x 2</td>
                                        <td class="text-right">$240.00</td>
                                        <td class="text-center">
                                            <a href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table class="table table-bordered total">
                                    <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                        <td class="text-left">$1,101.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                        <td class="text-left">$4.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>VAT (17.5%)</strong></td>
                                        <td class="text-left">$192.68</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-left">$1,297.68</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-right btn-block1">
                                    <a href="cart.html">
                                        View Cart
                                    </a>
                                    <a href="#">
                                        Checkout
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Main Header Ends -->

        <!-- Main Menu Starts -->
        <nav id="main-menu" class="navbar" role="navigation">
            <!-- Nav Header Starts -->
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Nav Header Ends -->

            <!-- Navbar Cat collapse Starts -->
            <?php $this->renderPartial('//site/_menu'); ?>
            <!-- Navbar Cat collapse Ends -->
        </nav>
        <!-- Main Menu Ends -->

    </div>
    <!-- Ends -->
</header>
<!-- Header Section Ends -->

<div class="container" id="main-container">
    <!-- flashMessages -->
    <?php $this->widget('yupe\widgets\YFlashMessages'); ?>

    <!-- Breadcrumb Starts -->
    <?php $this->widget(
        'bootstrap.widgets.TbBreadcrumbs',
        array(
            'links' => $this->breadcrumbs,
        )
    );?>
    <!-- Breadcrumb Ends -->

    <?php echo $content; ?>
</div>

<!-- Footer Section Starts -->
<?php $this->renderPartial('//site/_footer'); ?>
<!-- Footer Section Ends -->

</body>
</html>