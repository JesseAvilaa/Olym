<?php
if(!$_SESSION['email']) {
	header('Location: authentication.php');
	exit();
}