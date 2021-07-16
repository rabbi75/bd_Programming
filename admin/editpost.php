
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Post</h2>

            <?php

            if (!empty($_GET['editpost'])) {
                $p_id = $_GET['editpost'];
            }


              if (isset($_POST['submit'])) {
                $title=mysqli_real_escape_string($con,$_POST['title']);
                $cat=mysqli_real_escape_string($con,$_POST['cat']);
                $body=mysqli_real_escape_string($con,$_POST['body']);
                $tags=mysqli_real_escape_string($con,$_POST['tags']);
                $author=mysqli_real_escape_string($con,$_POST['author']);
                $userid=mysqli_real_escape_string($con,$_POST['userid']);

                if (isset($_POST['submit'])) {
                $permited  = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "uploads/".$unique_image;

                if ($title == "" || $cat == "" || $body == "" || $tags == "" || $author == "") {
                    echo "<span class='error'>Field must not be empty</span>";
                 }else{

                 if (!empty($file_name)) {
                 
                  if ($file_size >1048567) {
                    echo "<span class='error'>Image Size should be less then 1MB!
                    </span>";
                    } elseif (in_array($file_ext, $permited) === false) {
                    echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permited)."</span>";
                    } else{
                    move_uploaded_file($file_temp, $uploaded_image);
                    $query ="UPDATE tbl_post
                            SET
                            cat = '$cat',
                            title = '$title',
                            body = '$body',
                            image = '$uploaded_image',
                            author = '$author',
                            tags = '$tags',
                            userid = '$userid'
                            WHERE id = '$p_id'";

                    $Updated_rows = mysqli_query($con,$query);
                    if ($Updated_rows) {
                    echo "<span class='success'>Data Updated Successfully.
                    </span>";
                    }else {
                    echo "<span class='error'>Data Not Updated !</span>";
                          }
                        }


                 }else{
                     $query ="UPDATE tbl_post
                            SET
                            cat = '$cat',
                            title = '$title',
                            body = '$body',
                            author = '$author',
                            tags = '$tags',
                            userid = '$userid'
                            WHERE id = '$p_id'";

                    $Updated_rows = mysqli_query($con,$query);
                    if ($Updated_rows) {
                    echo "<span class='success'>Data Updated Successfully.
                    </span>";
                    }else {
                    echo "<span class='error'>Data Not Updated !</span>";
                          }
                 }
               }
              }
             }
            ?>

        <div class="block">  

        <?php
            $sql = "SELECT * FROM tbl_post WHERE id='$p_id'";
            $query = mysqli_query($con,$sql);
            $editPost = mysqli_fetch_array($query);
            //print_r($editPost);
        ?>             
         <form action="" method="POST" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $editPost['title']; ?>" class="medium" />
                    </td>
                </tr>
             
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="cat">
                            <option>Select Category</option>

                            <?php
                             $sql = "SELECT * FROM tbl_catagory";
                             $query = mysqli_query($con,$sql);
                             if ($query) {
                             while($postData=mysqli_fetch_array($query)){
                             //print_r($postData);

                            ?>

                            <option
                                <?php
                                    if ($editPost['cat']==$postData['id']) { ?>
                                        selected="selected";
                                <?php  } ?>
                             value="<?php echo $postData['id']?>"><?php echo $postData['name']?></option>
                            <?php } } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $editPost['image']; ?>" height="80px" width="200px"></br>
                        <input type="file" name="image" />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="body">
                            <?php echo $editPost['body']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text" name="tags" value="<?php echo $editPost['tags']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text" name="author" value="<?php echo $editPost['author']; ?>" class="medium" />
                        <input type="hidden" name="userid" value="<?php echo $UserData['role']; ?>" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
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







