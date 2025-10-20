<?php
function showErrorMessages(string $inputName, &$errors) {
	echo "<ul>";
		foreach ($errors[$inputName] as $message) {
			echo "<li class=\"error-msg\">$message</li>";
		}

	echo "</ul>";
}
?>