<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctor-pacient-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_user'); ?>
		<?php echo $form->textField($model,'ID_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ID_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_doctor'); ?>
		<?php echo $form->textField($model,'ID_doctor',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ID_doctor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->