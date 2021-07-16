<?php include 'inc/header.php';?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
<?php
	if (isset($_POST['submit'])) {
        $firstname =mysqli_real_escape_string($con,$_POST['firstname']);
        $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $body=mysqli_real_escape_string($con,$_POST['body']);

        $error = "";
        if (empty($firstname)) {
        	$error = "First name must not be empty !";
        }elseif (empty($lastname)) {
        	$error = "Last name must not be empty !";
        }elseif (empty($email)) {
        	$error = "Email field must not be empty !";
        }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        	$error = "Invalid Email Address !";
        }elseif (empty($body)) {
        	$error = "Message field must not be empty !";
        }else{
        	$query = "INSERT INTO tbl_contact(firstname,lastname,email,body)VALUES('$firstname','$lastname','$email','$body')";
                $inserted_msg = mysqli_query($con,$query);
                if ($inserted_msg) {
                echo "<span style ='color:green''>Message sent Successfully.
                </span>";
                }else {
                echo "<span style ='color:red'>Message Not sent !</span>";
            }
        }
    }
?>
				<?php
					if (isset($_GET['$error'])) {
						echo "<span style ='color:red'>$error</span>";
					}if (isset($_GET['$msg'])) {
						echo "<span style ='color:green'>$msg</span>";
					}
				?>

			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name" required="" />
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name" required="" />
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="text" name="email" placeholder="Enter Email Address" required="" />
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body" required=""></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Send"/>
					</td>
				</tr>
				</table>
			<form>				
 		</div>

	</div>
<?php include 'inc/sidebar.php';?>
	</div>

<?php include 'inc/footer.php';?>