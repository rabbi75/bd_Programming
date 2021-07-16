<?php include '../helpers/format.php';?>
 <?php
    $tm = new format();
 ?>
<div class="grid_10">
<?php

    if (!empty($_GET['msg'])) {
        $p_id = $_GET['msg'];
    }
?>
    <div class="box round first grid">
        <h2>Reply Message</h2>
        <div class="block">  
<?php
  if (isset($_POST['submit'])) {
    $to =mysqli_real_escape_string($con,$_POST['toEmail']);
    $from=mysqli_real_escape_string($con,$_POST['fromEmail']);
    $subject=mysqli_real_escape_string($con,$_POST['subject']);
    $message=mysqli_real_escape_string($con,$_POST['message']);

    $send = mail($to, $subject, $message, $from);
    if ($send) {
        echo "<span class='success'>Message Sent Successfully.</span>";
    }else{
        echo "<span class='error'>Something went Wrong !</span>";
    }
  }
?>
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
                        <label>To</label>
                    </td>
                    <td>
                        <input type="text" readonly name="toEmail" value="<?php echo $result['email'];?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>From</label>
                    </td>
                    <td>
                        <input type="text" name="fromEmail" placeholder="Please Enter Your Email Adderss" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Subject</label>
                    </td>
                    <td>
                        <input type="text" name="subject" placeholder="Please Enter Your Subject" class="medium" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Message</label>
                    </td>
                    <td>
                        <textarea name="message" class="tinymce">
                            
                        </textarea>
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="ok" Value="Send" />
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







