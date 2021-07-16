
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Copyright Text</h2>

        <?php
            if (isset($_POST['submit'])) {
                $note=mysqli_real_escape_string($con,$_POST['note']);

                if ($note == "") {
                echo "<span class='error'>Field must not be empty</span>";
                }else{
                    $query ="UPDATE tbl_footer
                    SET
                    note = '$note'
                    WHERE id = '1'";

                    $Updated_rows = mysqli_query($con,$query);
                    if ($Updated_rows) {
                    echo "<span class='success'>Data Updated Successfully.
                    </span>";
                    }else {
                        echo "<span class='error'>Data Not Updated !</span>";
                    }
                }
            }
        ?>

        <div class="block copyblock"> 

        <?php
           $sql = "SELECT * FROM tbl_footer WHERE id =1";
           $query = mysqli_query($con,$sql);
           while ($result = mysqli_fetch_array($query)) {
           //print_r($result);
        ?>
         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" value="<?php echo $result['note'];?>" name="note" class="large" />
                    </td>
                </tr>
				
				 <tr> 
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        <?php } ?>
        </div>
    </div>
</div>

