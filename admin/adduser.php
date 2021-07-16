<?php 
        if (!$UserData['role']=='0') {
            echo "<script>window.location = '?page=dashboard';</script>";
        }
?>
<div class="grid_10">

    <div class="box round first grid">
        <h2>Add New User</h2>
       <div class="block copyblock"> 
        <?php
                  if (isset($_POST['submit'])) {
                    $name=mysqli_real_escape_string($con,$_POST['name']);
                    $username=mysqli_real_escape_string($con,$_POST['username']);
                    $password=mysqli_real_escape_string($con,$_POST['password']);
                    $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
                    $role=mysqli_real_escape_string($con,$_POST['role']);
                    //print_r($_POST);
                    if ($password!=$cpassword) {
                      echo "<span class ='error'>Your Password And Confirm Password Not Match!</span>";
                    }else{

                      $sql = "INSERT INTO tbl_user(name,username,password,role)VALUES('$name','$username','$password','$role')";
                      $Insert_Data=mysqli_query($con,$sql);

                      if ($Insert_Data) {
                        echo "<span class ='success'>User Created Successfully !</span>";
                      }else{
                        echo "<span class ='error'>User Not Created Successfully !</span>";
                      }


                    }

                  }
                ?>
         <form action="" method="POST">
            <table class="form">					
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" placeholder="Enter User Roll Name..." class="medium" required="" />
                    </td>
                </tr>                   
                <tr>
                    <td>
                        <label>User Name</label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter User Name..." class="medium" required="" />
                    </td>
                </tr>                   
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="text" name="password" placeholder="Enter Password..." class="medium" required="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Confirm Password</label>
                    </td>
                    <td>
                        <input type="text" name="cpassword" placeholder="Enter Confirm Password..." class="medium" required="" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>User Roll</label>
                    </td>
                    <td>
                        <select id="select" name="role">
                            <option>Select User Roll</option>
                            <option value="0">Admin</option>
                            <option value="1">Author</option>
                            <option value="2">Editor</option>
                        </select>
                    </td>
                </tr>
				<tr>
                    <td></td> 
                    <td>
                        <input type="submit" name="submit" Value="Create" />
                    </td>
                </tr>
            </table>
            </form>

        </div>
    </div>
</div>
