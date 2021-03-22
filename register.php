<?php 
	include('server.php');
	include('navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Regisztráció</title>	
</head>
<body class="form-body">
	<div class="input-box">
		<img src="img/signuplogo.png" class="logo">
		<form method="post" action="register.php">
			<!--display validation errors here -->
			<?php include('errors.php'); ?>
			<div class="input-group">
				<input type="text" name="username" placeholder="Felhasználónév" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">				
				<input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Jelszó" name="password_1">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Jelszó mégegyszer" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Regisztráció</button>
			</div>
			<p>Már rendelkezel fiókkal? <a href="login.php">Belépés</a></p>
		</form>
	</div>
</body>
</html>