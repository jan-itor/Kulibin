<?php
/* @var $this SparePartsController */
/* @var $model SpareParts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'spare_id'); ?>
		<?php echo $form->textField($model,'spare_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spare_name'); ?>
		<?php echo $form->textField($model,'spare_name',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spare_image'); ?>
		<?php echo $form->textField($model,'spare_image',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spare_descr'); ?>
		<?php echo $form->textArea($model,'spare_descr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spare_mark'); ?>
		<?php echo $form->textField($model,'spare_mark',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spare_model'); ?>
		<?php echo $form->textField($model,'spare_model',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spare_struct'); ?>
		<?php echo $form->textField($model,'spare_struct',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spare_price'); ?>
		<?php echo $form->textField($model,'spare_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
