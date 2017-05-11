<?php
/* @var $this ResourceController */
/* @var $data Resource */
?>
<!-- POST ITEM -->
<div class="blog-post-item">
    <!-- IMAGE -->
    <figure class="margin-bottom-20">
        <?php echo Content::get_picture_responsive($data->id); ?>
    </figure>
    <h2>
        <?php echo CHtml::link($data->title, array('content/view', 'id' => $data->id), array('class' => '')); ?>
    </h2>
    <ul class="blog-post-info list-inline">
        <li>
            <i class="fa fa-clock-o"></i> 
            <span class="font-lato"><?php echo UserAdmin::get_date($data->created); ?></span>
        </li>
        <li>
            <i class="fa fa-folder-open-o"></i> 
            <?php echo CHtml::link('<span class="font-lato">' . ContentCategory::getCategoryName($data->catid) . '</span>', array('content/category', 'id' => $data->catid), array('class' => 'category')); ?>            
        </li>
    </ul>
    <p style="font-size:16px;">
        <?php echo $this->text_cut($this->html2txt($data->introtext), 150); ?>
        <?php //echo Content::getPara($data->introtext, '</p>'); ?>
        <?php echo CHtml::link('<i class="fa fa-plus"></i> <span>Read more</span>', array('content/view', 'id' => $data->id), array('class' => '', 'style' => 'font-size:14px;')); ?>
    </p>
    <?php //echo CHtml::link('<i class="fa fa-plus"></i> <span>Read More</span>', array('content/view', 'id' => $data->id), array('class' => 'btn btn-reveal btn-default')); ?>
</div>
<!-- /POST ITEM -->