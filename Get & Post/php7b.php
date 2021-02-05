<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>&_POST</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<h2>Masukan Nama</h2>

	<form action="php7b.2.php" method="post"> 
	<!-- Nilai default attribute method adalah get -->
		<input type="text" name="nama">
		<!-- attribute name digunakan sebagai index dari $_POST untuk halaman yang dituju form -->
		<br><br>
		<button type="submit" name="submit">Kirim</button>
	</form>


</body>
</html>