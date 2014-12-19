<?php
/* @var $this CategoriesController */
/* @var $model Categories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categories-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с  <span class="required">*</span> Обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_title'); ?>
		<?php echo $form->textField($model,'cat_title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cat_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_position'); ?>
		<?php echo $form->dropDownList($model,'cat_position',array('top'=>'Верхняя','left'=>'Слева')); ?>
		<?php echo $form->error($model,'cat_position'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->