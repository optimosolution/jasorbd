<?php
/* @var $this ContentController */
/* @var $model Content */
$this->pageTitle = $model->title;
$this->breadcrumbs = array(
    ContentCategory::getCategoryName($model->catid) => array('content/category', 'id' => $model->catid),
    $model->title,
);
?>
<h1 class="blog-post-title"><?php echo $model->title; ?></h1>
<ul class="blog-post-info list-inline">
    <li>
        <i class="fa fa-clock-o"></i> 
        <span class="font-lato"><?php echo UserAdmin::get_date($model->created); ?></span>
    </li>
    <li>
        <i class="fa fa-folder-open-o"></i> 
        <?php echo CHtml::link('<span class="font-lato">' . ContentCategory::getCategoryName($model->catid) . '</span>', array('content/category', 'id' => $model->catid), array('class' => 'category')); ?>            
    </li>
</ul>
<!-- IMAGE -->
<figure class="margin-bottom-20">
    <?php echo Content::get_picture_responsive($model->id); ?>
</figure>
<p><?php echo $model->introtext; ?></p>
<div class="divider divider-dotted"><!-- divider --></div>