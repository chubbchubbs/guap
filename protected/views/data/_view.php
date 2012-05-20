<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_user')); ?>:</b>
	<?php echo CHtml::encode($data->ID_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_start')); ?>:</b>
	<?php echo CHtml::encode($data->date_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_finnish')); ?>:</b>
	<?php echo CHtml::encode($data->date_finnish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arParams')); ?>:</b>
	<?php echo CHtml::encode($data->arParams); ?>
	<br />


</div>