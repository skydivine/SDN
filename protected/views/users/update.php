<?php
/* @var $this UsersController */
/* @var $model Users */

$this->menu=array(
	array('label'=>'Daftar Akun', 'url'=>array('index')),
	array('label'=>'Buat Akun', 'url'=>array('create')),
	array('label'=>'Lihat Akun', 'url'=>array('view', 'id'=>$model->username)),
	array('label'=>'Atur Akun', 'url'=>array('admin')),
);
?>

<h3>Perbarui Akun @<?php echo $model->username; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<br>