<?php
$this->breadcrumbs=array(
	'Doctor Pacients'=>array('index'),
	$model->ID_connect=>array('view','id'=>$model->ID_connect),
	'Update',
);

$this->menu=array(
	array('label'=>'List DoctorPacient', 'url'=>array('index')),
	array('label'=>'Create DoctorPacient', 'url'=>array('create')),
	array('label'=>'View DoctorPacient', 'url'=>array('view', 'id'=>$model->ID_connect)),
	array('label'=>'Manage DoctorPacient', 'url'=>array('admin')),
);
?>

<h1>Update DoctorPacient <?php echo $model->ID_connect; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>