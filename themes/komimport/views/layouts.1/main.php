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

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <?php Yii::app()->clientScript->registerScriptFile('/js/bootstrap-hover-dropdown.min.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/js/jquery.magnific-popup.min.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/js/custom.js'); ?>

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
        nav.header-top {
            border: none;
            margin-bottom: 0px;
        }

        nav.header-top .navbar-nav > li > a {
            color: #FFF;
            padding: 12px 15px 12px 3px;
        }

        nav.header-top .navbar-collapse {
            /*height: 44px !important;*/
        }

        .navbar, nav.header-top .navbar-nav {
            min-height: 44px;
            border-radius: 0px;
        }

        nav.header-top .navbar-nav > li > a:hover, .nav > li > a:focus {
            background-color: transparent;

        }

        nav.header-top .navbar-nav > li .fa {
            margin-right: 3px;
        }

        nav.header-top .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
            background-color: transparent;
            color: #FFB400;
        }

        .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
            background-color: transparent;
            color: #FFB400;
        }

        .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
            background-color: transparent;
            color: #FFB400;
        }

        .navbar-collapse {
            padding-left: 0px !important;
            padding-right: 0px !important;

        }

        #header-area {
            background: none repeat scroll 0 0 #eee;
        }

        nav.header-top .navbar-nav > li:last-child > a {
            /*padding: 12px 0px 12px 3px;*/
        }

        #cart .btn {
            /*width: 41px;
            margin-right: 5px;*/

        }
        #cart .btn:hover {
            color: #FFB400;
        }
        #cart {
            /*margin-bottom: 10px;*/
            margin: 0;
        }

        .main-header {
            /* padding: 50px 0;*/
        }

        .arrow__corner-i {
            border-color: rgba(255, 219, 76, 0) rgba(255, 219, 76, 0) rgba(255, 219, 76, 0) #ffdb4c;
            border-style: solid;
            border-width: 29px 0 29px 20px;
            line-height: 0;
            margin-right: -5px;
            margin-top: -29px;
            position: absolute;
            right: 0;
            top: 50%
        }

        .arrow__corner {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
            left: 100%;
            margin-left: -1px;
            overflow: hidden;
            right: auto;
            width: 20px;
        }

        #search_ya {
            background-image: -webkit-linear-gradient(top right, #ffdb4c 0, #fc0 100%);
            background: -moz-linear-gradient(right top, #ffdb4c 0px, #fc0 100%) repeat scroll 0 0 #ffdb4c;
        }

        #cart .btn {
            margin-top: 5px;
        }
    </style>
</head>
<body>

<!-- Header Section Starts -->
<header id="header-area">
<!-- Header Top Starts -->

<?php if (Yii::app()->hasModule('menu')): { ?>
    <?php $this->widget('application.modules.menu.widgets.MenuWidget', array('name' => 'header-menu')); ?>
<?php } endif; ?>

<!-- Header Top Ends -->
<!-- Starts -->
<div class="container">
<!-- Main Header Starts -->
<div class="main-header">
    <div class="row">
        <!-- Logo Starts -->
        <div class="col-md-3">
            <div id="logo">
                <a href="index.html"><img src="images/logo.png" title="Spice Shoppe" alt="Spice Shoppe" class="img-responsive"/></a>
            </div>
        </div>
        <!-- Logo Starts -->
        <!-- Search Starts -->
        <div class="col-md-7">

            <!--<form action="/" method="post" id="FORM_1">
                <div id="DIV_2">
                    <div id="DIV_3">
                        <h2 id="H2_4">
                            Форма поиска
                        </h2>

                        <div id="DIV_5">
                            <label for="edit-search-block-form--2" id="LABEL_6">
                            </label>

                            <div id="DIV_7">
                                Поиск по каталожным номерам и модели техники<span id="SPAN_8"></span>
                            </div>
                            <input type="text" id="INPUT_9" name="search_block_form" value="Введите номера через запятую или модель техники" size="15" maxlength="128"/>

                            <div id="DIV_10">
                                Например, <a href="#" id="A_11">20U-30-02002</a>, <a href="#" id="A_12">20U-30-02005</a>, <a href="#" id="A_13">20U-30-12453</a> или <a href="#" id="A_14">WB97S-5</a>
                            </div>
                        </div>
                        <div id="DIV_15">
                            <input type="submit" id="INPUT_16" name="op" value="Найти"/>
                        </div>
                        <input type="hidden" name="form_build_id" value="form-TCzgh1KUkOrpEHUaSVwB0A4h639rZJKSazZJ7awA6cU" id="INPUT_17"/>
                        <input type="hidden" name="form_id" value="search_block_form" id="INPUT_18"/>
                    </div>
                </div>
            </form>-->

            <div id="search_ya">
                <div style="padding:5px;" class="input-group">
                    <input style="border-radius: 0px;" type="text" class="form-control input-lg" placeholder="Search"/>
                    <!--<span class="input-group-btn">
                      <button class="btn btn-lg" type="button">
                          <i class="fa fa-search"></i>
                      </button>
                    </span>-->
                     <span class="input-group-btn">
                        <button style="border-radius: 0px;margin-left:5px;" class="btn btn-lg" type="button">
                            Найти
                        </button>
                     </span>
                </div>
                <div class="arrow__corner">
                    <div class="arrow__corner-i"></div>
                </div>

            </div>
        </div>
        <!-- Search Ends -->
        <!-- Shopping Cart Starts -->
        <div class="col-md-2">
            <div id="cart" class="btn-group btn-block">
                <button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
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
                                        <img src="images/product-images/hcart-thumb1.jpg" alt="image" title="image" class="img-thumbnail img-responsive"/>
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
                                        <img src="images/product-images/hcart-thumb2.jpg" alt="image" title="image" class="img-thumbnail img-responsive"/>
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
        <!-- Shopping Cart Ends -->
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
    <div class="collapse navbar-collapse navbar-cat-collapse">
        <ul class="nav navbar-nav">
            <li><a href="category-list.html">Spices &amp; Herbs</a></li>
            <li class="dropdown">
                <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                    Chili Powder
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a tabindex="-1" href="#">Red Chilly</a></li>
                    <li><a tabindex="-1" href="#">Green Chilly</a></li>
                    <li><a tabindex="-1" href="#">Italian Chilly</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Curry Powder</a>

                <div class="dropdown-menu">
                    <div class="dropdown-inner">
                        <ul class="list-unstyled">
                            <li class="dropdown-header">Sub Category</li>
                            <li><a tabindex="-1" href="#">item 1</a></li>
                            <li><a tabindex="-1" href="#">item 2</a></li>
                            <li><a tabindex="-1" href="#">item 3</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="dropdown-header">Sub Category</li>
                            <li><a tabindex="-1" href="#">item 1</a></li>
                            <li><a tabindex="-1" href="#">item 2</a></li>
                            <li><a tabindex="-1" href="#">item 3</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="dropdown-header">Sub Category</li>
                            <li><a tabindex="-1" href="#">item 1</a></li>
                            <li><a tabindex="-1" href="#">item 2</a></li>
                            <li><a tabindex="-1" href="#">item 3</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="category-list.html">Herb Blends</a></li>
            <li><a href="category-list.html">Seasonings</a></li>
            <li><a href="category-list.html">Salt Free Spices</a></li>
            <li><a href="category-list.html">Sambar Powders</a></li>
        </ul>
    </div>
    <!-- Navbar Cat collapse Ends -->
</nav>
<!-- Main Menu Ends -->
</div>
<!-- Ends -->
</header>
<!-- Header Section Ends -->
<!-- Slider Section Starts -->
<div class="slider">
    <div class="container">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper For Slides Starts -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slider-imgs/slide1-img.jpg" alt="Slider" class="img-responsive"/>
                </div>
                <div class="item">
                    <img src="images/slider-imgs/slide1-img.jpg" alt="Slider" class="img-responsive"/>
                </div>
            </div>
            <!-- Wrapper For Slides Ends -->
            <!-- Controls Starts -->
            <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <!-- Controls Ends -->
        </div>
    </div>
</div>
<!-- Slider Section Ends -->
<!-- 3 Column Banners Starts -->
<div class="col3-banners">
    <div class="container">
        <ul class="row list-unstyled">
            <li class="col-sm-4">
                <img src="images/banners/3col-banner1.jpg" alt="banners" class="img-responsive"/>
            </li>
            <li class="col-sm-4">
                <img src="images/banners/3col-banner2.jpg" alt="banners" class="img-responsive"/>
            </li>
            <li class="col-sm-4">
                <img src="images/banners/3col-banner3.jpg" alt="banners" class="img-responsive"/>
            </li>
        </ul>
    </div>
</div>
<!-- 3 Column Banners Ends -->

<section class="products-list">
<div class="container">
<!-- Heading Starts -->
<h2 class="product-head">Latest Products</h2>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
    <div class="row">
        <!-- Product #1 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #1 Ends -->
        <!-- Product #2 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #2 Ends -->
        <!-- Product #3 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #3 Ends -->
        <!-- Product #4 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #4 Ends -->
    </div>
</div>
<div class="item">
    <div class="row">
        <!-- Product #1 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #1 Ends -->
        <!-- Product #2 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #2 Ends -->
        <!-- Product #3 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #3 Ends -->
        <!-- Product #4 Starts -->
        <div class="col-md-3 col-sm-6">
            <div class="product-col">
                <div class="image">
                    <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                </div>
                <div class="caption">
                    <h4><a href="product.html">Simply Organic Seeds</a></h4>

                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" title="Wishlist" class="btn btn-wishlist">
                            <i class="fa fa-heart"></i>
                        </button>
                        <button type="button" title="Compare" class="btn btn-compare">
                            <i class="fa fa-bar-chart-o"></i>
                        </button>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #4 Ends -->
    </div>
</div>

</div>
<style>
    #INPUT_1 {
        color: rgb(255, 255, 255);
        cursor: default;
        display: block;
        opacity: 0.800000011920929;
        position: absolute;
        right: 23px;
        text-align: center;
        top: -27px;
        vertical-align: middle;
        white-space: pre;
        width: 21px;
        z-index: 0;
        align-items: flex-start;
        perspective-origin: 10.5px 10.5px;
        transform-origin: 10.5px 10.5px;
        background: rgb(61, 61, 61) url(http://yupe-project/img/carousel_prev.png) no-repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px none rgb(255, 255, 255);
        font: normal normal 100 60px/30px 'Helvetica Neue', Helvetica, Arial, sans-serif;
        margin: -20px 0px 0px;
        outline: rgb(255, 255, 255) none 0px;
        padding: 0px;
        transition: background-color 0.3s ease 0s;
    }

    /*#INPUT_1*/


</style>
<!-- Controls -->
<a style="top:380px;position:absolute;height:30px;" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a style="top:380px;position:absolute;height:30px;" class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
</section>
<!-- Latest Products Starts -->
<section class="products-list">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">Latest Products</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <!-- Product #1 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4><a href="product.html">Simply Organic Seeds</a></h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Ends -->
            <!-- Product #2 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4><a href="product.html">Simply Organic Seeds</a></h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #2 Ends -->
            <!-- Product #3 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4><a href="product.html">Simply Organic Seeds</a></h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #3 Ends -->
            <!-- Product #4 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4><a href="product.html">Simply Organic Seeds</a></h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #4 Ends -->
        </div>
        <!-- Products Row Ends -->
    </div>
</section>
<!-- Latest Products Ends -->
<!-- 2 Column Banners Starts -->
<div class="col2-banners">
    <div class="container">
        <ul class="row list-unstyled">
            <li class="col-sm-4">
                <img src="images/banners/2col-banner1.jpg" alt="banners" class="img-responsive"/>
            </li>
            <li class="col-sm-8">
                <img src="images/banners/2col-banner2.jpg" alt="banners" class="img-responsive"/>
            </li>
        </ul>
    </div>
</div>
<!-- 2 Column Banners Ends -->
<!-- Specials Products Starts -->
<section class="products-list">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">Specials Products</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <!-- Product #1 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="product-full.html">Simply Organic Seeds</a>
                        </h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Ends -->
            <!-- Product #2 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="product-full.html">Simply Organic Seeds</a>
                        </h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #2 Ends -->
            <!-- Product #3 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="product-full.html">Simply Organic Seeds</a>
                        </h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #3 Ends -->
            <!-- Product #4 Starts -->
            <div class="col-md-3 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="images/product-images/pimg1.jpg" alt="product" class="img-responsive"/>
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="product-full.html">Simply Organic Seeds</a>
                        </h4>

                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #4 Ends -->
        </div>
        <!-- Products Row Ends -->
    </div>
</section>
<!-- Specials Products Ends -->

<!-- Footer Section Starts -->
<?php $this->renderPartial('//layouts/_footer'); ?>
<!-- Footer Section Ends -->

</body>
</html>