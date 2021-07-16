
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Post</h2>

            <?php

            if (!empty($_GET['editpost'])) {
                $p_id = $_GET['editpost'];
            }


              if (isset($_POST['submit'])) {
                echo "<script>window.location = '?page=postlist';</script>";
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
                        <input type="text" readonly value="<?php echo $editPost['title']; ?>" class="medium" />
                    </td>
                </tr>
             
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" readonly>
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
                        <input type="file" readonly />
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td>
                        <textarea class="tinymce" readonly>
                            <?php echo $editPost['body']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $editPost['tags']; ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $editPost['author']; ?>" class="medium" />
                        <input type="hidden" readonly value="<?php echo $UserData['role']; ?>" class="medium" />
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







