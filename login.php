<?php 
	include('server.php'); 
	include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bejelentkezés</title>
</head>
<body class="form-body">
	<div class="input-box">
		<img src="img/signin.png" class="logo">
		<form method="post" action="login.php">
			<!--display validation errors here -->
			<?php include('errors.php'); ?>
			<div class="input-group">
				<input type="text" name="username" placeholder="Felhasználónév">
			</div>
			<div class="input-group">
				<input type="password" name="password" placeholder="Jelszó">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Belépés</button>
			</div>
			<p>Még nincs fiókod? <a href="register.php">Regisztráció</a></p>
		</form>
	</div>	
</body>
</html>