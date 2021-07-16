
<div class="grid_10">
    <div class="box round first grid">
        <h2>Category List</h2>

        <?php
        	if (isset($_GET['delcatcat'])) {
        		$delid = base64_decode($_GET['delcatcat']);
        		$sql = "DELETE FROM tbl_catagory WHERE id='$delid'";
        		$delcat = mysqli_query($con,$sql);
        		if ($delcat) {
        			echo "<span class='success'>Category Deleted Successfully</span>";
        		}else{
        			echo "<span class='success'>Category Not Deleted</span>";
        		}
        	}
        ?>


        <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?PHP
						
						$sql = "SELECT * FROM tbl_catagory order by id desc";
						$query = mysqli_query($con,$sql);
						$i=1;
						while($result=mysqli_fetch_array($query)){
							//print_r($result);
						
					?>
				<tr class="odd gradeX">
					<td><?php echo $i++?></td>
					<td><?php echo $result['name'];?></td>
					<td><a href="?page=editcat&amp;editcat=<?php echo $result['id']?>">Edit</a> || <a onclick ="return confirm('Are you sure to Delete..')" href="?page=catlist&amp;delcatcat=<?php echo base64_encode($result['id'])?>">Delete</a>
					<?php } ?>
				</tr>
				
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




 