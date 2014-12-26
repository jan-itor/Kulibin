<?php
/* @var $this SparePartsController */
/* @var $model SpareParts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'spare-parts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'spare_name'); ?>
		<?php echo $form->textField($model,'spare_name',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'spare_name'); ?>
	</div>

	<div class="row">
                  <?php
                   echo $form->labelEx($model,'spare_image'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', 
                        array( 'model'=>$model, 
                            'attribute'=>'spare_image',
                            'language'=>'ru', 
                            'editorTemplate'=>'full', )); ?>
		<?php echo $form->error($model,'spare_image'); ?>
<!--//$this->widget(
//    'yiiwheels.widgets.fileupload.WhFileUpload',
//    array(
//        'name'     => 'fileuploadui',
//        'url'      => $this->createUrl('images/sparealbum', array('type' => 'fine')),
//        'multiple' => true,
//    )
//);-->

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spare_descr'); ?>
		<?php echo $form->textArea($model,'spare_descr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'spare_descr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spare_mark'); ?>
		<?php echo $form->textField($model,'spare_mark',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'spare_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spare_model'); ?>
		<?php echo $form->textField($model,'spare_model',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'spare_model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spare_struct'); ?>
		<?php echo $form->textField($model,'spare_struct',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'spare_struct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spare_price'); ?>
		<?php echo $form->textField($model,'spare_price'); ?>
		<?php echo $form->error($model,'spare_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('CохранитьЫ'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
