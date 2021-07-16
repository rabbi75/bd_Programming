<?php include '../helpers/format.php';?>
 <?php
 	$tm = new format();
 ?>
    <div class="grid_10">
        <div class="box round first grid">
            <h2>User List</h2>
            <?php
        		if (isset($_GET['deluser'])) {
        			$delid = base64_decode($_GET['deluser']);
        			$sql = "DELETE FROM tbl_user WHERE id='$delid'";
        			$delcat = mysqli_query($con,$sql);
        			if ($delcat) {
        				echo "<span class='success'>User Deleted Successfully</span>";
        			}else{
        				echo "<span class='success'>User Not Deleted</span>";
        			}
        		}
        	?>
            <div class="block">  
                <table class="data display datatable" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Usern Name</th>
						<th>Email</th>
						<th>Details</th>
						<th>Role</th>
						<th>Action</th>
					</tr>
				</thead>

					<?php
						$sql = "SELECT * FROM tbl_user";
						$query = mysqli_query($con,$sql);
						if ($query) {
							$i=0;
							while ($result = mysqli_fetch_array($query)) {
							$i++;
					?>
					<tr class="odd gradeX">
						<td ><?php echo $i?></td>
						<td ><?php echo $result['name'] ?></td>
						<td ><?php echo $result['username'] ?></td>
						<td ><?php echo $result['email'] ?></td>
						<td ><?php echo $tm->textshorten($result['details'],30); ?></td>

						<td >
							<?php 
								if ($result['role']=='0') {
									echo "Admin";
								}elseif ($result['role']=='1') {
									echo "Author";
								}elseif ($result['role']=='2') {
									echo "Editor";
								}
						 	?>
						 </td>

						<td >
							<a href="?page=viewuer&amp;viewUer=<?php echo $result['id']?>">View</a> 

							<?php if ($UserData['role']=='0') { ?>
							|| <a onclick ="return confirm('Are you sure to Delete..')" href="?page=users&amp;deluser=<?php echo base64_encode($result['id'])?>">Delete</a> 
							<?php } ?>
						</td>
					</tr>
					<?php } } ?>
	
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

