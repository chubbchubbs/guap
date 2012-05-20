<?php
$this->breadcrumbs=array(
	'Doctor Pacients',
);

$this->menu=array(
	array('label'=>'Create DoctorPacient', 'url'=>array('create')),
	array('label'=>'Manage DoctorPacient', 'url'=>array('admin')),
);
?>

<h1>Doctor Pacients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
