<?php
/* @var $this CategoriesController */
/* @var $model Categories */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список категорий', 'url'=>array('index')),
	array('label'=>'Создать категорию', 'url'=>array('create')),
	array('label'=>'Вид категорий', 'url'=>array('view', 'id'=>$model->cat_id)),
	array('label'=>'Журнал категорий', 'url'=>array('admin')),
);
?>

<h1>Обновить <?php echo $model->cat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>