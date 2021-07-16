<?php
	session_start();
	session_unset('phpcoder');
	session_destroy();
	header('location:index.php');

?>