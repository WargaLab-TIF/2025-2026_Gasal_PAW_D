<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require_once("validators.php");
require_once("utils.php");

if (isset($_POST['submit'])) {
	// Customer Identity
	$bankAccountNumber = $_POST['bank-account-number'];
	$fullname = $_POST['fullname'];
	$dateOfBirth = $_POST["date-of-birth"];
	$monthOfBirth = $_POST["month-of-birth"];
	$yearOfBirth = $_POST["year-of-birth"];
	$idNumber = $_POST["id-number"];
	$email = $_POST["email"];

	// mBanking Registration
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirm-password'];
	$transactionPin = $_POST['transaction-pin'];
	$confirmTransactionPin = $_POST['confirm-transaction-pin'];

	// Errors container
	$errors = [];

	// validating
	bankAccountNumberVal($bankAccountNumber, $errors);
	fullnameVal($fullname, $errors);
	dateOfBirthVal($dateOfBirth, $errors);
	monthOfBirthVal($monthOfBirth, $errors);
	yearOfBirthVal($yearOfBirth, $errors);
	idNumberVal($idNumber, $errors);
	emailVal($email, $errors);

	usernameVal($username, $errors);
	passwordVal($password, $errors);
	confirmPasswordVal($confirmPassword, $password, $errors);
	transactionPinVal($transactionPin, $errors);
	confirmTransactionPinVal($confirmTransactionPin, $transactionPin, $errors);
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Wildan Haydar Amru | TM 2 | Validasi</title>

		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="container">
			<div class="form-card">
				<?php if (isset($errors) && isset($_POST['submit']) && !count($errors)): ?>
					<h1 class="success-message">
						Pengisian Form Berhasil
					</h1>
				<?php else: ?>
					<h1>
						Form Registrasi mBanking
					</h1>

					<form action="index.php" method="post">
						<div id="customer-identity-information">
							<?php require_once("inputs/customer-identity-information.php"); ?>
						</div>

						<hr class="divider">

						<div id="mbanking-account-information">
							<?php require_once("inputs/mbanking-account-information.php"); ?>
						</div>

						<div class="buttons">
							<button class="btn btn-default" type="submit" name="submit">Submit</button>
						</div>
					</form>
				<?php endif; ?>
			</div>
		</div>
	</body>
</html>