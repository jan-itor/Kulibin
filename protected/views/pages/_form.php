<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'page_title'); ?>
		<?php echo $form->textField($model,'page_title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'page_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_conent'); ?>
		<?php echo $form->textArea($model,'page_conent',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'page_conent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_created'); ?>
		<?php echo $form->textField($model,'page_created'); ?>
		<?php echo $form->error($model,'page_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_status'); ?>
		<?php echo $form->textField($model,'page_status'); ?>
		<?php echo $form->error($model,'page_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('CохранитьЫ'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
