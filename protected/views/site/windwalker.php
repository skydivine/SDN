<?php
/* @var $this SiteController */

$this->pageTitle='Wind Walker | ' . Yii::app()->name;
?>
<html>
	<head>
	</head>
	<body>
	<div class="judjob">Wind Walker</div>
	<br>
	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/ww1.jpg" title="Wind Walker" style="width: 430px; height: 280px">
	<br>
	<br>
	<div class="sub">Skill Build</div>
	<br>
	<div class="sub2">Archer Skill Build</div>
	<br>
	Twin Shot
	<br>
	damage yang bagus, cepat dan singkat, bagus jika diambil.
	<br>
	<br>
	Magic Arrow
	<br>
	hanya cocok buat pvp, 1 level saja cukup
	<br>
	<br>
	Multi Shot
	<br>
	skill archer yang diciptakan untuk acrobat, kalau ada sisa sp, pakai buat skill ini
	<br>
	<br>
	<div class="sub2">Acrobat Skill Build</div>
	<br>
	Kick Shot
	<br>
	cukup level 1 saja, sebagai pembuka combo
	<br>
	<br>
	Binding Shot	
	<br>
	skill yang berfungsi menarik musuh, cukup level 1 saja, yang penting fungsinya
	<br>
	<br>
	Eagle Dive
	<br>
	skill yang fleksibel karena dapat digunakan di udara, damage lumayan
	<br>
	<br>
	Blooming Kick
	<br>
	berfungsi untuk stun musuh
	<br>
	<br>
	Circle Shot
	<br>
	menghindar sekaligus menyerang musuh
	<br>
	<br>	
	Spiral Vortex
	<br>
	wajib max, damage tinggi
	<br>
	<br>
	Cyclone Kick
	<br>
	dianjurkan max, damage tinggi, hanya susah untuk mengenai sasaran
	<br>
	<br>
	<div class="sub2">Wind Walker Skill Build</div>
	<br>
	Show Time
	<br>
	wajib max, mengurangi cooldown passive skill sebesar 90%, membuat windwalker menjadi lincah
	<br>
	<br>
	Rising Storm
	<br>
	menarik musuh dan menerbangkan ke udara, high damage
	<br>
	<br>
	EX skills
	<br>
	ambil semua, gk perlu dijelaskan
	<br>
	<br>
	Air Sense
	<br>
	meningkatkan attack power jika menggunakan skill eagle dive atau air pounce	
	<br>
	<br>
	<div class = "linkKomentar">
			<h1>Komentar<h1>	
			</div>
		<?php 
			$komentar = Comment::model()->findAll();
			foreach($komentar as $komen){
				if($komen->pilihberita == 3){
					echo $komen->username;
					echo ' : ';
					echo $komen->comment;
					echo '<br>';
				}
			}
		?>
		<br>
		<h4><a href="index.php?r=comment/create">Buat Komentar</a></h4>

	</body>
	

</html>