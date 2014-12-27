<?php
/* @var $this SparePartsController */
/* @var $model SpareParts */

$this->breadcrumbs=array(
	'Spare Parts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Журнал SpareParts', 'url'=>array('index')),
	array('label'=>'Создать SpareParts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#spare-parts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Spare Parts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'spare-parts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'spare_id',
		'spare_name',
		'spare_image',
		'spare_descr',
		'spare_mark',
		'spare_model',
		/*
		'spare_struct',
		'spare_price',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
