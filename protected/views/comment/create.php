<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->pageTitle=Yii::app()->name ;
$this->menu=array(
	array('label'=>'Daftar Komentar', 'url'=>array('index'), 'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Atur Komentar', 'url'=>array('admin'), 'visible'=>(Yii::app()->user->name == 'admin'),),
);
?>

<h3>Kirim Komentar</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<br>