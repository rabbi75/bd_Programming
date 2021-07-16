
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Social Media</h2>

        <?php
            if (isset($_POST['submit'])) {
                $fb=mysqli_real_escape_string($con,$_POST['fb']);
                $tw=mysqli_real_escape_string($con,$_POST['tw']);
                $ln=mysqli_real_escape_string($con,$_POST['ln']);
                $gp=mysqli_real_escape_string($con,$_POST['gp']);

                if ($fb == "" || $tw == "" || $ln == "" || $gp == "") {
                echo "<span class='error'>Field must not be empty</span>";
                }else{
                    $query ="UPDATE tbl_social
                    SET
                    fb = '$fb',
                    tw = '$tw',
                    ln = '$ln',
                    gp = '$gp'
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

        <div class="block">

        <?php
            $sql = "SELECT * FROM tbl_social WHERE id =1";
            $query = mysqli_query($con,$sql);
            while ($result = mysqli_fetch_array($query)) {
            //print_r($result);
        ?>               
         <form action="" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Facebook</label>
                    </td>
                    <td>
                        <input type="text" name="fb" value="<?php echo $result['fb'];?>" class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Twitter</label>
                    </td>
                    <td>
                        <input type="text" name="tw" value="<?php echo $result['tw'];?>" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>LinkedIn</label>
                    </td>
                    <td>
                        <input type="text" name="ln" value="<?php echo $result['ln'];?>" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                        <label>Google Plus</label>
                    </td>
                    <td>
                        <input type="text" name="gp" value="<?php echo $result['gp'];?>" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td></td>
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

