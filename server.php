<?php

	session_start(); //starting the session

	$username =""; /*creating variables*/
	$email = "";
	$errors = array();
	$height = 0;
	$weight = 0;
	$bmi = 0;

	//connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration') or die($db);

	//if the registration button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);		

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Felhasználónév megadása kötelező!"); //add error to errors array
		}
		if (empty($email)) {
			array_push($errors, "Email cím megadása kötelező!");
		}
		if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
			array_push($errors, "Az email cím nem megfelelő!");
		}
		if (empty($password_1)) {
			array_push($errors, "Jelszó megadása kötelező!");
		}
		if (strlen($password_1) < 6) {
			array_push($errors, "A jelszónak legalább 6 karakter hosszúnak kell lennie!");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "A két jelszó nem egyezik!");
		}

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			$password = md5($password_1); // encrypt password before storing in database (security)
			$sql = "INSERT INTO users (username, email, password)
					 VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			header('location: index.php'); //redirect to home page
		}
	}

	// log user in from login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Felhasználónév megadása kötelező!"); //add error to errors array
		}

		if (empty($password)) {
			array_push($errors, "Jelszó megadása kötelező!");
		}

		if (count($errors) == 0) {
			$password = md5($password); // encrypt password before comparing with that from database
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				// log user in
				$_SESSION['username'] = $username;
				header('location: index.php');

			}else{
				array_push($errors, "A felhasználónév vagy jelszó hibás!");
			}
		}
	}

	if (isset($_GET['calculate'])) {
		
		$height = $_GET['height'];
		$weight = $_GET['weight'];

		if (empty($height)) {
			array_push($errors, "Magasság megadása kötelező!");
		}
		if (empty($weight)) {
			array_push($errors, "Súy megadása kötelező!");
		}
		// if there are no errors, calculate the bmi
		if (count($errors) == 0) {

			$bmi = $weight / ($height/100*$height/100);
			$bmi = number_format($bmi,2);
		}
	}

	// logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>