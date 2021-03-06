<?php
$this->pageTitle = ContentCategory::getCategoryName($_REQUEST['id']);
$this->breadcrumbs = array(
    ContentCategory::getCategoryName($_REQUEST['id']),
);
?>
<h1 class="blog-post-title"><?php echo ContentCategory::getCategoryName($_REQUEST['id']); ?></h1>
<div class="divider divider-dotted"><!-- divider --></div>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'template' => '{items}{pager}',
    'itemView' => '_view',
    'pager' => array(
        'header' => '',
        'prevPageLabel' => '<i class="fa fa-backward"></i>',
        'nextPageLabel' => '<i class="fa fa-forward"></i>',
        'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
        'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
        'selectedPageCssClass' => 'active', //default "selected"
        'maxButtonCount' => 10, // defalut 10  
        'htmlOptions' => array(
            'class' => 'pagination',
            'style' => '',
            'id' => '',
        ),
    ),
));
?>