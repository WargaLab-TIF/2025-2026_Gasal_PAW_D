<?php 	
require_once 'fungsi.php';
if (isset($_POST['submit'])) {
	$errors = validate($_POST);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Pembukaan Rekening</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-container">
		<?php if(!((isset($_POST['submit']) && count($errors)==0))) :?>
		<h1>Form Pendaftaran M-Banking <br> Bank INB</h1>
	<?php endif; ?>
		<form action="index.php" method="POST">
			<fieldset>
				<?php if(isset($_POST['submit']) && count($errors)==0) :?>
				<?php require_once 'success.php'; ?>
				
			<?php else: ?>
				<?php require_once 'form.php'; ?>
			<?php endif; ?>
			</fieldset>
		</form>
	</div>
		
</body>
</html>