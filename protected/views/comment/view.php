<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->menu=array(
	array('label'=>'Daftar Komentar', 'url'=>array('index'), 'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Buat Komentar', 'url'=>array('create'), 'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Atur Komentar', 'url'=>array('admin'), 'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Lihat Semua Komentar', 'url'=>array('index')),
);
?>

<h3>Komentar Dari @<?php echo $model->username; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'pilihberita',
		'comment',
	),
)); ?>
<br>
