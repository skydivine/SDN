<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->menu=array(
	array('label'=>'Daftar Komentar', 'url'=>array('index')),
	array('label'=>'Buat Komentar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Atur Komentar</h3>

<?php echo CHtml::link('Cari Komentar','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'username',
		'pilihberita',
		'comment',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
