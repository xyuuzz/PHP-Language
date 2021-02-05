<?php 

if ( isset($_POST["submit"]) ) { 	// Mengecek apakah tombol submit sudah ditekan

	// Memvalidasi email dan pasword yang benar
	if($_POST["user"] == "maulana1212" && $_POST["password"] == "user4545") {
		header("Location: profile.php");
		exit;
	} else {
		$eror = true;
	}


}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log In User</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<?php if(isset($eror)) { ?>
		<h1 style="color: red"><i>Leboke seng bener cok</i></h1>
	<?php } ?>

	<form action="" method="post">
		
		<h1>Masukan user dan password anda</h1>
		<label for="user">user : </label>
		<input type="text" name="user" placeholder="user" id="user">

		<br><br>

		<label for="pass">Password : </label>
		<input type="password" name="password" placeholder="password" id="pass">
		<br><br>

		<button type="submit" name="submit">Masuk</button>

	</form>

</body>
</html>