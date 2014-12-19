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
		<?php echo $form->label($model,'page_conent'); ?>
		<?php echo $form->textArea($model,'page_conent',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'page_created'); ?>
		<?php echo $form->textField($model,'page_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'page_status'); ?>
		<?php echo $form->textField($model,'page_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
