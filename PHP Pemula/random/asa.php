<?php 

echo "Aku anak woi";


$array = [
	[
		"nama" => "dion",
		"umur" => 12,
		"tanggal lahir" => "12 Agustus 2007"
	],
	[
		"nama" => "muna",
		"umur" => 11,
		"tanggal lahir" => "14 November 2007"
	]
];


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
		
	<h1>Halo semua</h1>

	<ul>
		<?php foreach($array as $arr) { ?>
			<li> 	
			<a href="asa2.php?
			<?php foreach($arr as $key => $value) { ?>
				<?=$key?>=<?=$value."&"?> 
			<?php } ?>" >
				<?= $arr["nama"] ?></a>
			</li>
		<?php } ?>
	</ul>


</body>
</html>

