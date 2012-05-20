<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_connect')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_connect), array('view', 'id'=>$data->ID_connect)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_user')); ?>:</b>
	<?php echo CHtml::encode($data->ID_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_doctor')); ?>:</b>
	<?php echo CHtml::encode($data->ID_doctor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>