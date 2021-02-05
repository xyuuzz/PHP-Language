<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Profil Buah</title>
	</head>
	<body>
	    
	    <h1>Halo</h1>
	    <?php var_dump($_GET); ?>
		<br><br>

		<ul>	
			<?php foreach($_GET as $key => $value) { ?>
				<li> <?= $key . " : " . $value; ?> </li>
			<?php } ?>
		<ul>

	</body>
</html>

<!-- 

NB Function PHP

header() => untuk redirect ke halaman yang ditentukan
=> 	header("Location : url");

isser() => untuk mengecek apakah variabel tersebut sudah dibuat atau belum
=> isset(namaVariabel);

 -->




