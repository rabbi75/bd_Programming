<?php
	include '../config.php';

	session_start();

	if (isset($_GET['page']) && ($_SESSION['phpcoder']!='')) {
		$username=$_SESSION['phpcoder'];

		$sql="SELECT * FROM tbl_user WHERE username = '$username'";
		$query=mysqli_query($con,$sql);
		$UserData=mysqli_fetch_array($query);
		//print_r($UserData);

		include 'common/header.php';
		include $_GET['page'].'.php';
		include 'common/footer.php';
	}else{
		include 'login.php';
	}
	
?>