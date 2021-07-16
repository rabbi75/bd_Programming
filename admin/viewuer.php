
<div class="grid_10">

    <div class="box round first grid">
        <h2>View User</h2>

            <?php
                if (!empty($_GET['viewUer'])) {
                    $V_id = $_GET['viewUer'];
                }
            ?>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<script>window.location = '?page=users';</script>";
                }
            ?>

        <div class="block">  

        <?php
            
            $sql="SELECT * FROM tbl_user WHERE id='$V_id'";
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
                        <input type="text" readonly value="<?php echo $result['name']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>User Name</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $result['username']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $result['email']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Details</label>
                    </td>
                    <td>
                        <textarea class="tinymce" readonly>
                            <?php echo $result['details']; ?>
                        </textarea>
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Ok" />
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







