<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Buat Akun', 'url'=>array('create')),
	array('label'=>'Atur Akun', 'url'=>array('admin')),
);
?>

<h3>Daftar Akun</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<br>