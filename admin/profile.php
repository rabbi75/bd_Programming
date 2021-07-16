<?php
 $username=$_SESSION['phpcoder'];
?>
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Profile</h2>

            <?php
              if (isset($_POST['submit'])) {
                $name=mysqli_real_escape_string($con,$_POST['name']);
                $username=mysqli_real_escape_string($con,$_POST['username']);
                $email=mysqli_real_escape_string($con,$_POST['email']);
                $details=mysqli_real_escape_string($con,$_POST['details']);
                
                     $query ="UPDATE tbl_user
                            SET
                            name = '$name',
                            username = '$username',
                            email = '$email',
                            details = '$details'
                            WHERE username='$username'";

                    $Updated_rows = mysqli_query($con,$query);
                    if ($Updated_rows) {
                    echo "<span class='success'>Data Updated Successfully.
                    </span>";
                    }else {
                    echo "<span class='error'>Data Not Updated !</span>";
                          }
                 }

            ?>

        <div class="block">  

        <?php
            
            $sql="SELECT * FROM tbl_user WHERE username = '$username'";
            $query=mysqli_query($con,$sql);
            $result=mysqli_fetch_array($query);
                //print_r($result);
        ?>             
         <form action="" method="POST" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $result['name']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>User Name</label>
                    </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $result['username']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $result['email']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Details</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="details">
                            <?php echo $result['details']; ?>
                        </textarea>
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







