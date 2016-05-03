<?php
/* @var $this UsersController */
/* @var $model Users */

$this->menu=array(
	array('label'=>'Daftar Akun', 'url'=>array('index')),
	array('label'=>'Buat Akun', 'url'=>array('create')),
	array('label'=>'Perbarui Akun', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Atur Akun', 'url'=>array('admin')),
);
?>

<h3>Akun @<?php echo $model->username; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'email',
		'password',
		'passwordconfirm',
	),
)); ?>
<br>