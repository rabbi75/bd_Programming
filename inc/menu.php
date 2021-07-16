<div class="navsection templete">

	<?php
		$path = $_SERVER['SCRIPT_FILENAME'];
		$currentpage = basename($path,'.php');
	?>
	<ul>
		<li><a 
			<?php if ($currentpage == 'index') {echo 'id="active"';} ?>
		 href="index.php">Home</a></li>
		<?php
			$sql = "SELECT * FROM tbl_page"; 
			$category = mysqli_query($con,$sql);
			if ($category) {
			while ( $result=mysqli_fetch_array($category)) {
	
		?>
			<li><a
				<?php
					if (isset($_GET['pageid']) && $_GET['pageid']==$result['id']) {
						echo 'id="active"';
					}
				?>
			 href="page.php?pageid=<?php echo $result['id']; ?>"> <?php echo $result['name'];?> </a></li>

		<?php } } ?>	
		<li><a 
			<?php if ($currentpage == 'contact') {echo 'id="active"';} ?>
			href="contact.php">Contact</a></li>
	</ul>
</div>