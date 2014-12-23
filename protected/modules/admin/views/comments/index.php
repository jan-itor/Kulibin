<?php
/* @var $this CommentsController */
/* @var $model Comments */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comments-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал комментариев</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comments-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'com_id'=>array(
                    'name'=>'com_id',
                    'headerHtmlOptions'=>array('width'=>30)
                ),
		'com_content',
                'user_id'=>array(
                    'name'=>'user_id',
                    'value'=>'$data->users->username',
                   // 'filter'=>  Categories::all()
                ),
		'com_created',
		'page_id',
		array(
			'class'=>'CButtonColumn',
                    'updateButtonOptions'=>array('style'=>'display:none')
		),
	),
)); ?>
