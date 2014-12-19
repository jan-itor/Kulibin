<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Журнал Pages', 'url'=>array('index')),
	array('label'=>'Создать Pages', 'url'=>array('admin')),
);
?>

<h1>Create Pages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>