<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bejelentkezés</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Roboto&family=Seymour+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="form-body">

	<header>
		<h1>Edd magad egészségesre!</h1>
		<nav>
			<ul>
				<li><a href="index.php">Célunk</a></li>
				<li><a href="#">Egészség a kilók tükrében</a></li>
				<li><a href="#">Kipróbálok valami új reggelit</a></li>
				<li><a href="bmi.php">BMI kalkulátor</a></li>
			</ul>
		</nav>
	</header>
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