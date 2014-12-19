<?php
/* @var $this PagesController */
/* @var $model Pages */


$this->menu=array(
	array('label'=>'Журнал страниц', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
	array('label'=>'Просмотр страницы', 'url'=>array('view', 'id'=>$model->page_id)),
);
?>

<h1>Обновление страниц <?php echo $model->page_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>