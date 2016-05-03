<?php
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Buat Komentar', 'url'=>array('create'),'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Atur Komentar', 'url'=>array('admin'),'visible'=>(Yii::app()->user->name == 'admin'),),
);
?>

<h3>Komentar</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<br>