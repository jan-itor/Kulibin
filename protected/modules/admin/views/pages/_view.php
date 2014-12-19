<?php
/* @var $this PagesController */
/* @var $data Pages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->page_id), array('view', 'id'=>$data->page_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_title')); ?>:</b>
	<?php echo CHtml::encode($data->page_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_conent')); ?>:</b>
	<?php echo CHtml::encode($data->page_conent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_created')); ?>:</b>
	<?php echo CHtml::encode($data->page_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_status')); ?>:</b>
	<?php echo CHtml::encode($data->page_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />


</div>