<?php include 'inc/header.php';?>

<?php
	if (!isset($_GET['pageid']) || $_GET['pageid'] == NULL) {
		header("loction:404.php");
	}else{
		$id = $_GET['pageid'];
	}
?>	

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
			<?php
                $sql = "SELECT * FROM tbl_page WHERE id ='$id'";
                $query = mysqli_query($con,$sql);
                if ($query) {
                
                while ($result = mysqli_fetch_array($query)) {
                //print_r($result);
            ?> 
				<h2><?php echo $result['name']?></h2>
					<?php echo $result['body']?>
				
			<?php } }else{header("location:404.php");} ?>	
			</div>

		</div>
<?php include 'inc/sidebar.php';?>
	</div>

<?php include 'inc/footer.php';?>