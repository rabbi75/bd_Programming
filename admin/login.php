<?php include '../helpers/format.php';?>
 <?php
  $tm = new format();
 ?> 

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">

            <?php

            if (isset($_SESSION['phpcoder'])) {
              header('location:?page=dashboard');
            }


              if (isset($_POST['submit'])) {

                $$username = $tm->validation($_POST['username']);
                $$password = $tm->validation($_POST['password']);

                $username =mysqli_real_escape_string($con,$_POST['username']);
                $password=mysqli_real_escape_string($con,$_POST['password']);

                $sql="SELECT username,password FROM tbl_user WHERE username='$username' AND password='$password'";
                $query=mysqli_query($con,$sql);
                $count=mysqli_num_rows($query);

                if ($username!='') {
                  if ($password!='') {
                    if ($count>0) {
                      $_SESSION['phpcoder'] = $username;
                      header('location:?page=dashboard');
                    }else{
                      echo '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span  aria-hidden="true">&times;</  span></button>
                        <strong>Error!</strong>Please Your User Name Or Password Not Match!</div>';
                    }
                    
                  }else{
                    echo '
                   <div class="alert alert-danger alert-dismissible" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</  span></button>
                   <strong>Error!</strong>Please Fill Up Your User Password!</div>';
                  }
                  
                }else{
                  echo '
                   <div class="alert alert-danger alert-dismissible" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</  span></button>
                   <strong>Error!</strong>Please Fill Up Your User Email!</div>';
                }
              }

            ?>

		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Enter Your Name" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Enter Your Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" name="submit" value="Login" />
			</div>
		</form><!-- form -->

		<div class="button">
			<a href="#">BD_Programming Website</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>