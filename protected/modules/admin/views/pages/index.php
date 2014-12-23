<?php
/* @var $this PagesController */
/* @var $model Pages */
 

$this->menu=array(
	array('label'=>'Создать страницу', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал страниц</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pages-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'page_id'=>array(
                    'name'=>'page_id',
                    'headerHtmlOptions'=>array('width'=>30  )
                ),
		'page_title',
		'page_created'=>  array(
                    'name'=>'created',
                    'value'=>'date($data->page_created)',
                    'filter'=>FALSE
                ),
		'page_status'=>array(
                    'name'=>'page_status',
                    'value'=>'($data->page_status==1)?"Доступно":"Скрытно"',
                    'filter'=>array(0=>'Скрыто',1=>'Доступно'),
                    
                ),
		'cat_id'=>array(
                    'name'=>'cat_id',
                    'value'=>'$data->category->cat_title',
                    'filter'=>  Categories::all()
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
