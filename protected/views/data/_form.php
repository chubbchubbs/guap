<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_user'); ?>
		<?php echo $form->textField($model,'ID_user',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ID_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_start'); ?>
		<?php echo $form->textField($model,'date_start'); ?>
		<?php echo $form->error($model,'date_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_finnish'); ?>
		<?php echo $form->textField($model,'date_finnish'); ?>
		<?php echo $form->error($model,'date_finnish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arParams'); ?>
		<?php echo $form->textField($model,'arParams',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'arParams'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->