<?php include '../helpers/format.php';?>
 <?php
 	$tm = new format();
 ?>	
<!-- delete post start -->
 <?php
	if (isset($_GET['delslider'])) {
		$d_slider = base64_decode($_GET['delslider']);
		
		$sql = "SELECT * FROM tbl_slider WHERE id = '$d_slider'";
		$query = mysqli_query($con,$sql);
		if ($query) {
			while ($dilling = mysqli_fetch_array($query)) {
				$dellink = $dilling['image'];
				unlink($dellink);
			}
		}

		$delsql = "DELETE FROM tbl_slider WHERE id = '$d_slider'";
		$delquery = mysqli_query($con,$delsql);
		if ($delquery) {
        			echo "<span class='success'>Slider Deleted Successfully</span>";
        		}else{
        			echo "<span class='success'>Slider Not Deleted</span>";
        		}
	}

 ?>
 <!-- delete post end -->

    <div class="grid_10">
        <div class="box round first grid">
            <h2>Slider List</h2>
            <div class="block">  
                <table class="data display datatable" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Slider Title</th>
						<th>Slider Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM tbl_slider";
						$query = mysqli_query($con,$sql);
						if ($query) {
							$i=0;
							while ($result = mysqli_fetch_array($query)) {
							$i++;
					?>
					<tr class="odd gradeX">
						<td><?php echo $i; ?></td>
						<td><?php echo $result['title']; ?></td>
						<td><img src="<?php echo $result['image']; ?>" height="60px" width="100px" ></td>
				<td>
						
					<?php if ($UserData['role']=='0') { ?>

						 <a href="?page=editslider&amp;editslider=<?php echo $result['id']?>">Edit</a> 
							
						||<a onclick ="return confirm('Are you sure to Delete..')" href="?page=sliderlist&amp;delslider=<?php echo base64_encode($result['id']) ?>">Delete</a>

					<?php } ?>		
						
				</td>
					</tr>
					<?php } } ?>
				</tbody>
			</table>

           </div>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>

