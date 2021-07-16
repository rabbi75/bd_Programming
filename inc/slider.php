<div class="slidersection templete clear">
        <div id="slider">
        	<?php
				$sql = "SELECT * FROM tbl_slider order by id limit 5";
				$query = mysqli_query($con,$sql);
				if ($query) {
					while ($result = mysqli_fetch_array($query)) {
			?>
            <a href="#"><img src="admin/<?php echo $result['image'];?>" alt="<?php echo $result['image'];?>" title="<?php echo $result['title'];?>" /></a>
            <?php } } ?>
        </div>

</div>