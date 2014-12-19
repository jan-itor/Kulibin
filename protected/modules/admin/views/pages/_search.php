<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'page_id'); ?>
		<?php echo $form->textField($model,'page_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'page_title'); ?>
		<?php echo $form->textField($model,'page_title',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'page_status'); ?>
		<?php echo $form->dropDownList($model,'page_status',array(''=>'',0=>'Скрыто',1=>'Доступно')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model,'cat_id',Categories::all(),array('empty'=>'')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
