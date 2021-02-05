<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<?php var_dump($_GET) ?>
	<ul>
		<?php foreach($_GET as $key => $value) { ?>
		<li>
			<?= $key . " : " . $value . ", "?>
			<br>
		</li>
		<?php } ?>
		<br>

	</ul>

</body>
</html>