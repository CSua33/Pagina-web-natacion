<?php
session_start();
if ($_SESSION["autentica"] !="Si"){
	header("Location: login_2.php");
	exit();
}
?>