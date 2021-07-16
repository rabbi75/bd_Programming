<?php include '../helpers/format.php';?>
 <?php
 	$tm = new format();
 ?>	
<!-- delete post start -->
 <?php
	if (isset($_GET['delpost'])) {
		$d_id = base64_decode($_GET['delpost']);
		
		$sql = "SELECT * FROM tbl_post WHERE id = '$d_id'";
		$query = mysqli_query($con,$sql);
		if ($query) {
			while ($dilling = mysqli_fetch_array($query)) {
				$dellink = $dilling['image'];
				unlink($dellink);
			}
		}

		$delsql = "DELETE FROM tbl_post WHERE id = '$d_id'";
		$delquery = mysqli_query($con,$delsql);
		if ($delquery) {
        			echo "<span class='success'>Data Deleted Successfully</span>";
        		}else{
        			echo "<span class='success'>Data Not Deleted</span>";
        		}
	}

 ?>
 <!-- delete post end -->

    <div class="grid_10">
        <div class="box round first grid">
            <h2>Post List</h2>
            <div class="block">  
                <table class="data display datatable" id="example">
				<thead>
					<tr>
						<th width="5%">No.</th>
						<th width="15%">Post Title</th>
						<th width="20%">Description</th>
						<th width="7%">Category</th>
						<th width="10%">Image</th>
						<th width="10%">Author</th>
						<th width="7%">Tags</th>
						<th width="10%">Date</th>
						<th width="16%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT tbl_post.*, tbl_catagory.name FROM tbl_post INNER JOIN tbl_catagory ON tbl_post.cat = tbl_catagory.id ORDER By tbl_post.title DESC";
						$query = mysqli_query($con,$sql);
						if ($query) {
							$i=0;
							while ($result = mysqli_fetch_array($query)) {
							$i++;
					?>
					<tr class="odd gradeX">
						<td><?php echo $i; ?></td>
						<td><?php echo $result['title']; ?></td>
						<td><?php echo $tm->textshorten($result['body'],40); ?></td>
						<td><?php echo $result['name'] ?></td>
						<td><img src="<?php echo $result['image']; ?>" height="60px" width="100px" ></td>
						<td><?php echo $result['author'] ?></td>
						<td><?php echo $result['tags'] ?></td>
						<td><?php echo $tm->formatDate($result['date']) ?></td>
				<td>
						<a href="?page=viewpost&amp;editpost=<?php echo $result['id']?>">View</a>
					<?php if ($UserData['role']==$result['userid'] || $UserData['role']=='0') { ?>

						||<a href="?page=editpost&amp;editpost=<?php echo $result['id']?>">Edit</a> 
							
						||<a onclick ="return confirm('Are you sure to Delete..')" href="?page=postlist&amp;delpost=<?php echo base64_encode($result['id']) ?>">Delete</a>

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

