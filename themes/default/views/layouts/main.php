<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="keywords" content="Jatio Shompod Rokkha" />
        <meta name="description" content="Jatio Shompod Rokkha" />
        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
        <!-- CORE CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- THEME CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout.css" rel="stylesheet" type="text/css" />
        <!-- PAGE LEVEL SCRIPTS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/header-1.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <!-- SWIE SLIDER -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="smoothscroll enable-animation">
        <!-- SLIDE TOP -->
        <div id="slidetop">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h6><i class="icon-heart"></i> WHY SMARTY?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
                    </div>
                    <div class="col-md-4">
                        <h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h6><i class="icon-envelope"></i> CONTACT INFO</h6>
                        <ul class="list-unstyled">
                            <li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
                            <li><b>Phone:</b> 1-800-565-2390</li>
                            <li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
            <a class="slidetop-toggle" href="#"><!-- toggle button --></a>
        </div>
        <!-- /SLIDE TOP -->
        <!-- wrapper -->
        <div id="wrapper">
            <div id="header" class="sticky clearfix">
                <!-- TOP NAV -->
                <header id="topNav">
                    <div class="container">
                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Logo -->
                        <?php //echo CHtml::link('<span style="font-size:24px;">' . CHtml::encode(Yii::app()->name) . '</span>', array('site/index'), array('class' => 'logo pull-left')); ?>
						<?php
                        $logo = CHtml::image(Yii::app()->theme->baseUrl . '/assets/images/logo_2.png', 'Logo', array('alt' => Yii::app()->name, 'class' => 'img-responsive', 'title' => Yii::app()->name, 'style' => ''));
                        echo CHtml::link($logo, array('site/index'), array('class' => 'logo'));
                        ?>
                        <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                            <nav class="nav-main">
                                <ul id="topMain" class="nav nav-pills nav-main" style="font-size:16px;">
                                    <li class="dropdown active"><!-- HOME -->
                                        <a class="dropdown-toggle" href="#">
                                            <?php echo ContentCategory::getCategoryName(13); ?>
                                        </a>
                                        <?php echo ContentCategory::get_category_list_menu(13); ?>    
                                    </li>
                                    <li><?php echo CHtml::link(Content::get_title(1), array('content/view', 'id' => 1)); ?></li>
                                    <li class="dropdown"><!-- PAGES -->
                                        <a class="dropdown-toggle" href="#">
                                            <?php echo ContentCategory::getCategoryName(2); ?>
                                        </a>
                                        <?php echo ContentCategory::get_category_list_menu(2); ?>
                                    </li>
                                    <li><?php echo CHtml::link(Title::get_title(6), array('youtube/index')); ?></li>
                                    <li><?php echo CHtml::link(Title::get_title(14), array('content/view', 'id' => 26)); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
                <!-- /Top Nav -->
            </div>                       
            <?php echo $content; ?>            
            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">

                    <div class="row">

                        <div class="col-md-3">
                            <!-- Footer Logo -->
                            <h3><?php echo Yii::app()->name; ?></h3>
                            <!-- Small Description -->
                            <!-- Contact Address -->
                            <address>
                                <ul class="list-unstyled">
                                    <li class="footer-sprite address">
                                        137/B, Jahanara Garden<br />Green Road, Dhaka-1215
                                    </li>
                                    <li class="footer-sprite phone">
                                        Phone: +880 1716 399032<br />+8802 8141952
                                    </li>
                                    <li class="footer-sprite email">
                                        <a href="mailto:bhuiyan_manik@yahoo.com">bhuiyan_manik@yahoo.com</a>
                                    </li>
                                </ul>
                            </address>
                            <!-- /Contact Address -->
                        </div>
                        <div class="col-md-5">
                            <!-- Latest Blog Post -->
                            <h4 class="letter-spacing-1"><?php echo Title::get_title(2); ?></h4>
                            <?php Content::get_latest_content(); ?>
                            <!-- /Latest Blog Post -->
                        </div>
                        <div class="col-md-4">
                            <!-- Newsletter Form -->
                            <h4 class="letter-spacing-1"><?php echo Title::get_title(12); ?></h4>
                            <p>Subscribe to Our Newsletter to get Important Articles.</p>

                            <form class="validate" action="http://theme.stepofweb.com/Smarty/v1.1.2/HTML/php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <!-- /Newsletter Form -->
                            <!-- Social Icons -->
                            <div class="margin-top-20">
                                <a href="https://www.facebook.com/jasorbd/" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                            </div>
                            <!-- /Social Icons -->
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>.
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->
        </div>
        <!-- /wrapper -->
        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>
        <!-- PRELOADER -->
        <!--<div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div>--><!-- /PRELOADER -->
        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = '<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/index.html';</script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="<?php //echo Yii::app()->theme->baseUrl;          ?>/assets/js/scripts.js"></script>
        <!-- SWIPE SLIDER -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/view/demo.swiper_slider.js"></script>
    </body>
</html>