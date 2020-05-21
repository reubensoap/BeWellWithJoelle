<?php
session_start();
// Change this to your connection info.
$dsn = 'mysql:host=localhost;dbname=id13048112_testerdatabase';
$username = 'id13048112_tester';
$password = 'Alicia20182018--';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include '../model/errors.php';
    exit;
}

// Now we check if the data from the login form was submitted, isset() well check if the data exists.

if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

// Prepare our SQL, preparing the SQL will prevent SQL injection.

function dataLogin($username) {
	global $db;
	$query = 'SELECT id, password FROM personalDash WHERE username = :username';
	$statement1 = $db->prepare($query);
	$statement1->bindValue(':username', $username);
	$statement1->execute();
	$checker = $statement1->fetch();
	$statement1->closeCursor();
	return $checker;
}

$loginData = dataLogin($_POST['username']);

if (!empty($loginData)) {
	if ($_POST['password'] == $loginData['password']) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $loginData['id'];
		header('Location: dashboard');
	} else {
		$loginError = "Incorrect Password. Please Try Again";
		include 'index.php';
	}
} else {
	$loginError = "Incorrect User. Please Try Again.";
	include 'index.php';
}
