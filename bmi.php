<?php 
	include('server.php');
	include('navbar.php');

	// if user not logged in, they cannot access this page
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BMI kalkulátor</title>
</head>
<body class="form-body">
	<div class="input-box">
		<form method="get" action="bmi.php">
			<!--display validation errors here -->
			<?php include('errors.php'); ?>
			<div class="input-group">
				<input type="number" name="height" placeholder="Magasság (cm)">
			</div>
			<div class="input-group">
				<input type="number" name="weight" placeholder="Súly (kg)">
			</div>
			<div class="input-group">
				<button type="submit" name="calculate" class="btn">Számítás</button>
				<b style="margin-left: 20%">Az ön BMI-je: <?php echo $bmi; ?>% </b>
			</div>
		</form>
		<img src="img/bmi_table.png" class="pic">
	</div>
	<div class="content">
		<p>
		A testtömegindex (rövidítve TTI vagy BMI, ez utóbbi az angol: body mass indexből képzett betűszó) egy statisztikai mérőszám, az egyén testmagasságának és -tömegének arányát méri. BMI kalkulátorunkkal megtudhatja, hogy elhízottnak számít-e, hány kiló az ideális testsúlya, továbbá mennyi energiát fogyaszthat naponta.</p>
	</div>
	<div class ="logout">		
		<?php if (isset($_SESSION['username'])): ?>
			<p><a href="bmi.php?logout='1'">Kijelentkezés</a></p>
		<?php endif ?>
	</div>
</body>
</html>