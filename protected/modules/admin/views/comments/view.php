<?php
/* @var $this CommentsController */
/* @var $model Comments */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->com_id,
);

$this->menu=array(
	array('label'=>'Список комментариев', 'url'=>array('index')),
	array('label'=>'Удалить комментарий', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->com_id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>Просмотр комментария#<?php echo $model->com_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'com_id',
		'com_content',
		'user_id',
		'com_created',
		'page_id',
	),
)); ?>
