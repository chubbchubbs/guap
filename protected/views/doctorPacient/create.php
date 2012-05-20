<?php
$this->breadcrumbs=array(
	'Doctor Pacients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DoctorPacient', 'url'=>array('index')),
	array('label'=>'Manage DoctorPacient', 'url'=>array('admin')),
);
?>

<h1>Create DoctorPacient</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>