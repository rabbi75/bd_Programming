
<?php include 'inc/header.php';?>

<?php
	if (!isset($_GET['id']) || $_GET['id'] == NULL) {
		header("loction:404.php");
	}else{
		$id = $_GET['id'];
	}
?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<?php
				$sql = "SELECT * FROM tbl_post WHERE id=$id";
				$query = mysqli_query($con,$sql);
				if ($query) {
					while ( $result=mysqli_fetch_array($query)) {
				
			?>
			<div class="about">
				<h2><?php echo $result['title'];?></h2>
				<h4><?php echo $tm->formatDate($result['date']); ?>, By <a href="#"><?php echo $result['author'];?></a></h4>
				<img src="admin/<?php echo $result['image'];?>" alt="post image"/>

				<?php echo $result['body'];?>

				
				
				<div class="relatedpost clear">
					<h2>Related articles</h2>

					<?php
						$catid = $result['cat'];
						$queryreleted = "SELECT * FROM tbl_post WHERE cat='$catid' order by rand() limit 6";
						$reletedpost = mysqli_query($con,$queryreleted);

						if ($reletedpost) {
						while ( $rresult=mysqli_fetch_array($reletedpost)) {

					?>
				
					<a href="post.php?id=<?php echo $rresult['id'];?>">
						<img src="admin/<?php echo $rresult['image'];?>" alt="post image"/></a>

					<?php } }else{echo "No Related Post Availabe";}?>
				</div>
				<?php } } else{header("location:404.php");}?>
	</div>

		</div>
<?php include 'inc/sidebar.php';?>
	</div>

<?php include 'inc/footer.php';?>