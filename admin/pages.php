<?php
if (isset($_GET['pageid'])) {
    $P_id = $_GET['pageid'];
}
?>
<style>
.actiondel{margin-left: 10px;}
.actiondel a{background: #f0f0f0 none repeat scroll 0 0;border: 1px solid #ddd;color: #444;cursor: pointer;font-size: 20px;font-weight: normal;padding: 2px 10px;}
</style>

    <div class="grid_10">
	
        <div class="box round first grid">
            <h2>Edit Page</h2>

                <?php
                  if (isset($_POST['submit'])) {
                    $name=mysqli_real_escape_string($con,$_POST['name']);
                    $body=mysqli_real_escape_string($con,$_POST['body']);


                    if ($name == "" || $body == "" ) {
                        echo "<span class='error'>Field must not be empty</span>";
                     } else{
                        $sql = "UPDATE tbl_page
                            SET
                            name = '$name',
                            body = '$body'
                            WHERE id = '$P_id'";
                        $query = mysqli_query($con,$sql);
                        if ($query) {
                        echo "<span class='success'>Page Updated Successfully.
                        </span>";
                        }else {
                        echo "<span class='error'>Page Not Updated !</span>";
                    }
                    }
                   }
                ?>

            <div class="block">
            <?php
                $sql = "SELECT * FROM tbl_page WHERE id ='$P_id'";
                $query = mysqli_query($con,$sql);
                while ($result = mysqli_fetch_array($query)) {
                //print_r($result);
            ?>               
             <form action="" method="POST">
                <table class="form">
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo $result['name'];?>" class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Content</label>
                        </td>
                        <td>
                            <textarea class="tinymce" name="body">
                                <?php echo $result['body'];?>
                            </textarea>
                        </td>
                    </tr>
					<tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                            <span class="actiondel"> <a onclick ="return confirm('Are you sure to Delete the Page..')" href="?page=delpage&amp;delpid=<?php echo base64_encode($result['id'])?>">Delete</a> </span>
                        </td>
                    </tr>
                </table>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>

        <!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
 <!-- Load TinyMCE -->







