<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->menu=array(
	array('label'=>'Daftar Komentar', 'url'=>array('index')),
	array('label'=>'Buat Komentar', 'url'=>array('create')),
	array('label'=>'Lihat Komentar', 'url'=>array('view', 'id'=>$model->comment)),
	array('label'=>'Atur Komentar', 'url'=>array('admin')),
);
?>

<h3>Update Komentar dari @<?php echo $model->username; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<br>