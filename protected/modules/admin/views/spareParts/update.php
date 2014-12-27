<?php
/* @var $this SparePartsController */
/* @var $model SpareParts */

$this->breadcrumbs=array(
	'Spare Parts'=>array('index'),
	$model->spare_id=>array('view','id'=>$model->spare_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Журна SpareParts', 'url'=>array('index')),
	array('label'=>'Создать SpareParts', 'url'=>array('create')),
	array('label'=>'Просмотр SpareParts', 'url'=>array('view', 'id'=>$model->spare_id)),
	array('label'=>'Manage SpareParts', 'url'=>array('admin')),
);
?>

<h1>Update SpareParts <?php echo $model->spare_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>