<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!DOCTYPE html>
<html>
	<body>
	<div id="useral">
	User Berhasil Dibuat
	</div>
	<br>
	<?php 
			$komentar = Users::model()->findAll();
			foreach($komentar as $komen){
					echo $komen->username;
					echo ' | ';
					echo $komen->email;
					echo ' | ';
					echo $komen->password;
					echo '<br>';
					echo '<br>';
			}
		?>

	</body>
</html>