<?php
$this->breadcrumbs=array(
	'Datas'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Data', 'url'=>array('index')),
	array('label'=>'Create Data', 'url'=>array('create')),
	array('label'=>'View Data', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Data', 'url'=>array('admin')),
);
?>

<h1>Update Data <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>