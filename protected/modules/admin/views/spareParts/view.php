<?php
/* @var $this SparePartsController */
/* @var $model SpareParts */

$this->breadcrumbs=array(
	'Spare Parts'=>array('index'),
	$model->spare_id,
);

$this->menu=array(
	array('label'=>'List SpareParts', 'url'=>array('index')),
	array('label'=>'Create SpareParts', 'url'=>array('create')),
	array('label'=>'Update SpareParts', 'url'=>array('update', 'id'=>$model->spare_id)),
	array('label'=>'Delete SpareParts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->spare_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpareParts', 'url'=>array('admin')),
);
?>

<h1>View SpareParts #<?php echo $model->spare_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'spare_id',
		'spare_name',
		'spare_image',
		'spare_descr',
		'spare_mark',
		'spare_model',
		'spare_struct',
		'spare_price',
	),
)); ?>
