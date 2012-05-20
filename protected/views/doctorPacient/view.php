<?php
$this->breadcrumbs=array(
	'Doctor Pacients'=>array('index'),
	$model->ID_connect,
);

$this->menu=array(
	array('label'=>'List DoctorPacient', 'url'=>array('index')),
	array('label'=>'Create DoctorPacient', 'url'=>array('create')),
	array('label'=>'Update DoctorPacient', 'url'=>array('update', 'id'=>$model->ID_connect)),
	array('label'=>'Delete DoctorPacient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_connect),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DoctorPacient', 'url'=>array('admin')),
);
?>

<h1>View DoctorPacient #<?php echo $model->ID_connect; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_connect',
		'ID_user',
		'ID_doctor',
		'date',
	),
)); ?>
