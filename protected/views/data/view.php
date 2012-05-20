<?php
$this->breadcrumbs=array(
	'Datas'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Data', 'url'=>array('index')),
	array('label'=>'Create Data', 'url'=>array('create')),
	array('label'=>'Update Data', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Data', 'url'=>array('admin')),
);
?>

<h1>View Data #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ID_user',
		'type',
		'date_start',
		'date_finnish',
		'arParams',
	),
)); ?>
