<?php include '../helpers/format.php';?>
 <?php
 	$tm = new format();
 ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Inbox</h2>
        <!-- Sent the seen box message query -->
        <?php
        	if (isset($_GET['seenid'])) {
        		$seenid = $_GET['seenid'];
        		$sql = "UPDATE `tbl_contact` SET `status` = '1' WHERE `id` = '$seenid'";
                $query = mysqli_query($con,$sql);
                if ($query) {
                    echo "<span class ='success'>Message sent in the Seen Box</span>";
                }else{
                    echo "<span class ='error'>Something went wrong !</span>";
                }
        	}
        ?>
        <!--End sent the seen box message query -->
        <div class="block">        
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Message</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?PHP	
					$sql = "SELECT * FROM tbl_contact WHERE status = '0' order by id desc";
					$query = mysqli_query($con,$sql);
					$i=0;
					while($result=mysqli_fetch_array($query)){
					$i++;
					//print_r($result);
					
				?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
					<td><?php echo $result['email'];?></td>
					<td><?php echo $tm->textshorten($result['body'],30); ?></td>
					<td><?php echo $tm->formatDate($result['date']); ?></td>
					<td>
						<a href="?page=viewmsg&amp;msgid=<?php echo $result['id']; ?>">View</a> ||
						<a href="?page=reply&amp;msg=<?php echo $result['id']; ?>">Reply</a> ||
						<a onclick ="return confirm('Are you sure to Move the Message..')" href="?page=inbox&amp;seenid=<?php echo $result['id']; ?>">Seen</a> 
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
       </div>
    </div>

    <div class="box round first grid">
        <h2>Seen Message</h2>
        <?php
        	if (isset($_GET['delid'])) {
        		$delid = base64_decode($_GET['delid']);
        		$sql = "DELETE FROM tbl_contact WHERE id='$delid'";
        		$delcat = mysqli_query($con,$sql);
        		if ($delcat) {
        			echo "<span class='success'>Message Deleted Successfully</span>";
        		}else{
        			echo "<span class='success'>Message Not Deleted</span>";
        		}
        	}
        ?>
        <div class="block"> 
        <!-- Sent the seen box message query -->
        <?php
        	if (isset($_GET['unseenid'])) {
        		$unseenid = $_GET['unseenid'];
        		$sql = "UPDATE `tbl_contact` SET `status` = '0' WHERE `id` = '$unseenid'";
                $query = mysqli_query($con,$sql);
                if ($query) {
                    echo "<span class ='success'>Message sent in the Seen Inbox</span>";
                }else{
                    echo "<span class ='error'>Something went wrong !</span>";
                }
        	}
        ?>
        <!--End sent the seen box message query -->       
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Message</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?PHP	
					$sql = "SELECT * FROM tbl_contact WHERE status = '1' order by id desc";
					$query = mysqli_query($con,$sql);
					$i=0;
					while($result=mysqli_fetch_array($query)){
					$i++;
					//print_r($result);
					
				?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
					<td><?php echo $result['email'];?></td>
					<td><?php echo $tm->textshorten($result['body'],30); ?></td>
					<td><?php echo $tm->formatDate($result['date']); ?></td>
					<td>
						<a href="?page=viewmsg&amp;msgid=<?php echo $result['id']; ?>">View</a> ||
						<a onclick ="return confirm('Are you sure to Move the Message..')" href="?page=inbox&amp;unseenid=<?php echo $result['id']; ?>">Unseen</a> ||
						<a onclick ="return confirm('Are you sure to Delete..')" href="?page=inbox&amp;delid=<?php echo base64_encode($result['id']); ?>">Delete</a>
					</td>
				</tr>
				<?php } ?>
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


