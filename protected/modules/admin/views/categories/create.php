<?php
/* @var $this CategoriesController */
/* @var $model Categories */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список категорий', 'url'=>array('index')),
	array('label'=>'Журнал категорий', 'url'=>array('admin')),
);
?>

<h1>Создать категорию</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>