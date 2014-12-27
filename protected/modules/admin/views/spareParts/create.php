<?php
/* @var $this SparePartsController */
/* @var $model SpareParts */

$this->breadcrumbs=array(
	'Spare Parts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Журнал SpareParts', 'url'=>array('index')),
	array('label'=>'Создать SpareParts', 'url'=>array('admin')),
);
?>

<h1>Добавить деталь</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>