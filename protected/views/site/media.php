<?php
/* @var $this SiteController */

$this->pageTitle= 'Download | ' . Yii::app()->name;

?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<div class="media">
		<h3>Download</h3>
		<br>
			<table>
				<tr>
					<td>Seven Heroes</td>
					<td>Priest</td>
				</tr>
				<tr>
					<td><a href="<?php echo Yii::app()->baseUrl; ?>/themes/the-walking-dead/img/model1.jpg" download><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/model1.jpg" title="Wallpaper" style="width: 430px; height: 280px"></a></td>
					<td><a href="<?php echo Yii::app()->baseUrl; ?>/themes/the-walking-dead/img/model2.jpg" download><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/model2.jpg" title="Wallpaper" style="width: 430px; height: 280px"></a></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Gladiator</td>
					<td>All Job</td>
				</tr>
				<tr>
					<td><a href="<?php echo Yii::app()->baseUrl; ?>/themes/the-walking-dead/img/model3.jpg" download><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/model3.jpg" title="Wallpaper" style="width: 430px; height: 280px"></a></td>
					<td><a href="<?php echo Yii::app()->baseUrl; ?>/themes/the-walking-dead/img/model4.jpg" download><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/model4.jpg" title="Wallpaper" style="width: 430px; height: 280px"></a></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Majesty</td>
					<td>Saint Haven</td>
				</tr>
				<tr>
					<td><a href="<?php echo Yii::app()->baseUrl; ?>/themes/the-walking-dead/img/model5.jpg" download><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/model5.jpg" title="Wallpaper" style="width: 430px; height: 280px"></a></td>
					<td><a href="<?php echo Yii::app()->baseUrl; ?>/themes/the-walking-dead/img/model6.jpg" download><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/model6.jpg" title="Wallpaper" style="width: 430px; height: 280px"></a></td>
				</tr>
			</table>
		</div>

	</body>
</html>