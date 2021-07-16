<?php include 'inc/header.php';?>	
<?php include 'inc/slider.php';?>	

<?php
	if (!isset($_GET['Category']) || $_GET['Category'] == NULL) {
		header("loction:404.php");
	}else{
		$Category = $_GET['Category'];
	}
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<?php
				$sql = "SELECT * FROM tbl_post WHERE cat=$Category";
				$query = mysqli_query($con,$sql);
				if ($query) {
					while ( $result=mysqli_fetch_array($query)) {
				
			?>

			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h2>
				<h4><?php echo $tm->formatDate($result['date']); ?>, By <a href="#"><?php echo $result['author'];?></a></h4>
				 <a href="#"><img src="admin/<?php echo $result['image'];?>" alt="post image"/></a>

				<?php echo $tm->textshorten($result['body']); ?>

				<div class="readmore clear">
					<a href="post.php?id=<?php echo $result['id'];?>">Read More</a>
				</div>
			</div>

			<?php } } else { header("loction: 404.php");} ?>

		</div>
<?php include 'inc/sidebar.php';?>
	</div>

<?php include 'inc/footer.php';?>