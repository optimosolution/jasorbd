<?php $this->beginContent('/layouts/main'); ?>
<!-- PAGE HEADER -->
<section class="page-header dark page-header-xs">
    <div class="container">
        <h1><?php echo Title::get_title(11); ?></h1>
        <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links' => $this->breadcrumbs,
                'htmlOptions' => array('class' => 'breadcrumb', 'style' => 'font-size:16px;'),
            ));
            ?><!-- breadcrumbs -->
        <?php endif ?>

    </div>
</section>
<br />
<!-- /PAGE HEADER -->
<div class="container">
    <div class="row">
        <!-- LEFT -->
        <div class="col-md-3 col-sm-3">
            <!-- INLINE SEARCH -->
            <div class="inline-search clearfix margin-bottom-30">
                <form action="#" method="get" class="widget_search">
                    <input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <!-- /INLINE SEARCH -->
            <hr />
            <!-- side navigation -->
            <div class="side-nav margin-bottom-60 margin-top-30">
                <div class="side-nav-head">
                    <button class="fa fa-bars"></button>
                    <h4><?php echo Title::get_title(9); ?></h4>
                </div>
                <?php ContentCategory::get_category_list(2); ?>
                <!-- /side navigation -->
            </div>
            <!-- Recent News -->
            <div class="side-nav margin-bottom-60 margin-top-30">
                <div class="side-nav-head">
                    <button class="fa fa-bars"></button>
                    <h4><?php echo Title::get_title(2); ?></h4>
                </div>
                <?php Content::get_recent_content(); ?>
                <!-- /side navigation -->
            </div>
            <!-- FEATURED VIDEO -->
            <h3 class="hidden-xs size-16 margin-bottom-10"><?php echo Title::get_title(10); ?></h3>
            <div class="hidden-xs embed-responsive embed-responsive-16by9 margin-bottom-60">
                <iframe class="embed-responsive-item" width="265" height="215" src="//www.youtube.com/embed/<?php echo $this->get_youtube_video(); ?>" frameborder="0" allowfullscreen></iframe>
            </div>           
            <!-- FACEBOOK -->
            <?php
            $this->widget('application.extensions.fbLikeBox.fbLikeBox', array(
                'likebox' => array(
                    'url' => 'https://www.facebook.com/jasorbd',
                    'header' => 'true',
                    'width' => '263',
                    'height' => '258',
                    'layout' => 'light',
                    'show_post' => 'false',
                    'show_faces' => 'true',
                    'show_border' => 'true',
                )
            ));
            ?> 
            <hr />
            <?php $this->get_advertisement(1); ?>
            <hr />
            <!-- SOCIAL ICONS -->
            <div class="hidden-xs margin-top-30 margin-bottom-60">
                <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
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
        </div>
        <!-- RIGHT -->
        <div class="col-md-9 col-sm-9">
            <?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>