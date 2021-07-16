
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Category</h2>
               <div class="block copyblock"> 
                <?php

                if (!empty($_GET['editcat'])) {
                    $u_id = $_GET['editcat'];
                }

                    if (isset($_POST['submit'])) {
                        $name=mysqli_real_escape_string($con,$_POST['name']);
                        if (empty($name)) {
                            echo "<span class ='error'>Field must not be Empty !</span>";
                        }else{
                            $sql = "UPDATE `tbl_catagory` SET `name` = '$name' WHERE `id` = '$u_id'";
                            $query = mysqli_query($con,$sql);
                            if ($query) {
                                echo "<span class ='error'>Category Updated Successfully</span>";
                            }else{
                                echo "<span class ='error'>Category Not Inserted !</span>";
                            }
                        }
                    }


                  
                    $sql = "SELECT * FROM `tbl_catagory` WHERE id ='$u_id'";
                    $query = mysqli_query($con,$sql);
                    $CatList = mysqli_fetch_array($query);
                    //print_r($CatList);
                  

                ?>
                 <form action="" method="POST">
                    <table class="form">                    
                        <tr>
                            <td>
                                <input type="text" name="name" value="<?php echo $CatList['name'];?>" placeholder="Enter Category Name..." class="medium" required="" />
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>

                </div>
            </div>
        </div>
