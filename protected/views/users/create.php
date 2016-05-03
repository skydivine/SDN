<?php
/* @var $this UsersController */
/* @var $model Users */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'Buat Akun',
);

$this->menu=array(
	array('label'=>'Daftar Akun', 'url'=>array('index')),
	array('label'=>'Atur Akun', 'url'=>array('admin')),
);
?>

<h3>Buat Akun</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<br>