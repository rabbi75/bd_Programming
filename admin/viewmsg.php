<?php include '../helpers/format.php';?>
 <?php
    $tm = new format();
 ?>
<div class="grid_10">
<?php

    if (!empty($_GET['msgid'])) {
        $p_id = $_GET['msgid'];
    }
?>
    <div class="box round first grid">
        <h2>Veiw Message</h2>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              echo "<script>window.location = '?page=inbox';</script>";
            }
        ?>

        <div class="block">  

        <?php
            $sql = "SELECT * FROM tbl_contact WHERE id='$p_id'";
            $query = mysqli_query($con,$sql);
            $result = mysqli_fetch_array($query);
            //print_r($editPost);
        ?>             
         <form action="" method="POST" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $result['firstname'].' '.$result['lastname']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $result['email'];?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $tm->formatDate($result['date']); ?>" class="medium" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Message</label>
                    </td>
                    <td>
                        <textarea class="tinymce">
                            <?php echo $result['body']; ?>
                        </textarea>
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="ok" Value="Ok" />
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







