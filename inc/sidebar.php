		<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
					<?php
						$sql = "SELECT * FROM tbl_catagory"; 
						$category = mysqli_query($con,$sql);
						if ($category) {
						while ( $result=mysqli_fetch_array($category)) {
				
					?>
						<li><a href="posts.php?Category=<?php echo $result['id']; ?>"> <?php echo $result['name'];?> </a></li>

						<?php } } else{ ?>
						<li>No Category Created</li>
						<?php } ?>					
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>
				<?php
					$sql = "SELECT * FROM tbl_post limit 5";
					$query = mysqli_query($con,$sql);
					if ($query) {
						while ( $result=mysqli_fetch_array($query)) {
				
				?>
					<div class="popular clear">
						<h3><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h3>
						<img src="admin/<?php echo $result['image'];?>" alt="post image"/></a>
						<?php echo $tm->textshorten($result['body'], 128); ?>	
					</div>
					
					<?php } } else {header("location:404.php");}?>
	
			</div>
			
		</div>