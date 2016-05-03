<?php
/* @var $this SiteController */

$this->pageTitle='Light Fury | ' . Yii::app()->name;
?>

<html>
	<head>
	</head>
	<body>
	<div class="judjob">Light Fury</div>
	<br>
	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/lf1.jpg" title="Light Fury" style="width: 430px; height: 280px">
	<br>
	<br>
	Oke, langsung saja kita bahas skill build light fury level 70 di Dragon Nest Indonesia :D
	<br>
	<br>
	<div class="sub">Gameplay</div>
	<br>
	Mengingat banyaknya LF yang masih tidak sempurna (termasuk saya), maka akan saya tulis ulang kira kiranya gimana :D
	<br>
	Pertama, yang harus diingat, anda adalah Healer, Anda dituntut untuk dapat melihat apa yang dilakukan oleh semua anggota party anda, apa ada yang kena Burn, nelen damage musuh, atau putus cinta, anda harus bisa membaca segalanya
	<br>
	Kedua, yang harus diingat, anda adalah Healer (Saking pentingnya, disebut 2x). Jadi jangan sibuk DPS sampai Party anda jadi tuyul putih semua
	<br>
	Ketiga, Spam Chakra of Energy, syelalu.. HP party ngurang dikit, Heal, dan persiapkan Chakra of Miracle untuk damage damage besar macam stomp manti zuul
	<br>
	Keempat, Meditasi, untuk party ber 8, tugas anda cuma Sunshine > Clone > Meditasi. Untuk party ber 4, Meditasi bisa agak dikurangi dengan catatan anda paham gelagat party kalau mau pesta Ulti.
	<br>
	Kelima, Sunshine Spark. Debuff +20% damage, wajib di spam, jangan malu malu
	<br>
	Keenam, Spam Outbreak untuk mengaktifkan passive 65 yang gaul
	<br>
	dan Terakhir, Ketika party anda rambo, tiap 5 detik minta heal, jangan ragu untuk bilang "CD woy, jangan rambo napa".
	<br>
	<br>
	<div class="sub">Skill Build</div>
	<br>
	<div class="sub2">Assassin Skill Tree</div>
	<br>
	Max passive hindaran 
	<br>
	Assassin pada dasarnya tipis, dan butuh banyak skill untuk survive dari hit hit super besar nantinya, jadi ya butuh banyak skill hindaran
	<br>
	<br>	
	Fan of Edge lvl 21
	<br>
	Damage besar, CD kecil, satu-satunya kekurangan adalah penggunaan yang harus jarak dekat, level 21 diambil karena merupakan kenaikan damage yang tinggi
	<br>
	<br>
	Passive MP tidak diambil
	<br>
	Kalau sampai anda kehabisan MP, ada yang salah, you're a madafakin Light Fury !
	<br>
	<br>
	<div class="sub2">Bringer Skill Tree</div>
	<br>
	Jalur Light Fury
	<br>
	<br>
	Outbreak Level 6
	<br>
	Untuk prasyarat EX, gunakan sesering mungkin, dan pelajari, apakah harus dilanjut, atau dipotong dengan klik kanan
	<br>
	<br>
	Karena peningkatan Heal nya sama di setiap level, level 17 dan 13 hanya berbeda 3%, bisa diakali dengan plate healing rate
	SPnya dipindah ke Line of Darkness
	<br>
	<br>
	Tunnel Level 1
	<br>
	Untuk bantu movement speed saja, tidak worth ditingkatkan untuk mengambil reduce damage, peningkatan reduce damagenya sangat sedikit
	<br>
	<br>
	Ring Strike MAX 
	<br>
	DPS yang nyam nyam, kombo yang bejibun, plus ditambah efek passive 65, sakit itu
	<br>
	<br>
	Chakra of Healing MAX
	<br>
	Damage Up, ditambah EX nya yang ada efek reduce damage, Purrrrfect
	<br>
	<br>
	Bunny level 0
	<br>
	Heal recehan, cuma berguna untuk nge-GB doang, itupun cuma di FDR, di RR udah ga ngangkat, MUAHAHAAHA
	<br>
	<br>
	Ulti level 1
	<br>
	Digunakan hanya ketika planet planet dalam kondisi sejajar (baca : Jarang banget)
	Dan damagenya tidak dibutuhkan, hanya daya lindungnya saja
	<br>
	<br>
	Jalur Tengah
	<br>
	<br>
	Cure Max
	<br>
	Setiap level mengurangi 5 detik cooldown, dan healer tanpa cure? sedih amat
	<br>
	<br>
	Racoon (Blessing of Azna) MAX
	<br>
	Jamannya dark party, punya buff dark permanen? keren banget ga sih?
	Serangan LF juga isinya light + dark, punya buff light + dark permanen? keren banget lah..
	<br>
	<br>
	Clone Level 2  
	<br>
	Sumber DPS utama LF ( secara LF cuma duduk terbang2 an doang), dan mempan buff, jadi kalo kena meditasi juga, efeknya muantap
	<br>
	<br>
	Jalur Abyss Walker
	<br>
	<br>
	Line of Darkness Level 11
	<br>
	Udah liat damagenya? waktu 60 aja sakit, apalagi sekarang..
	Level 11 karena kenaikan damage tertinggi 
	<br>
	<br>
	Kucing level 1
	<br>
	Sekedar ada, untuk bantu DPS LF
	Tidak dinaikkan karena pertambahan damagenya kecil
	<br>
	<br>
	Ulti level 2
	<br>
	Ulti berdamage, lumayan untuk bantu bantu party, dan sangat berguna untuk solo nest
	<br>
	<br>
	<div class="sub2">Light Fury Skill Tree</div>
	<br>
	Chakra of Miracle MAX
	<br>
	Why? Why not? Skill heal terbesar anda, use it wisely
	<br>
	<br>
	Sunshine Spark MAX
	<br>
	Skill DPS besar + Efek debuff tambahan 20% damage ke monster, sayang banget kalo ga dimax
	<br>
	<br>
	<br>
	<div class = "linkKomentar">
			<h1>Komentar<h1>	
			</div>
		<?php 
			$komentar = Comment::model()->findAll();
			foreach($komentar as $komen){
				if($komen->pilihberita == 1){
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