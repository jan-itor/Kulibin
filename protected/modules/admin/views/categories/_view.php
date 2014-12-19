<?php
/* @var $this CategoriesController */
/* @var $data Categories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cat_id), array('view', 'id'=>$data->cat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_title')); ?>:</b>
	<?php echo CHtml::encode($data->cat_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_position')); ?>:</b>
	<?php echo CHtml::encode($data->cat_position); ?>
	<br />


</div>