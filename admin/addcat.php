
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                <?php
                    if (isset($_POST['submit'])) {
                        $name=mysqli_real_escape_string($con,$_POST['name']);
                        if (empty($name)) {
                            echo "<span class ='error'>Field must not be Empty !</span>";
                        }else{
                            $sql = "INSERT INTO tbl_catagory(name) VALUES('$name')";
                            $query = mysqli_query($con,$sql);
                            if ($query) {
                                echo "<span class ='success'>Category Inserted Successfully</span>";
                            }else{
                                echo "<span class ='error'>Category Not Inserted !</span>";
                            }
                        }
                    }
                ?>
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" required="" />
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
