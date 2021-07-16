<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
               <li><a class="menuitem">Site Option</a>
                    <ul class="submenu">
                        <li><a href="?page=titleslogan">Title & Slogan</a></li>
                        <li><a href="?page=social">Social Media</a></li>
                        <li><a href="?page=copyright">Copyright</a></li>
                        
                    </ul>
                </li>
				
                 <li><a class="menuitem">Pages</a>
                    <ul class="submenu">
                        <li><a href="?page=addpage">Add New Page</a> </li>
                        <?php
                            $sql = "SELECT * FROM tbl_page";
                            $query = mysqli_query($con,$sql);
                            while ($result = mysqli_fetch_array($query)) {
                            //print_r($result);
                        ?>
                        <li><a href="?page=pages&amp;pageid=<?php echo $result['id'];?>"><?php echo $result['name'];?></a> </li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a class="menuitem">Category Option</a>
                    <ul class="submenu">
                        <li><a href="?page=addcat">Add Category</a> </li>
                        <li><a href="?page=catlist">Category List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Slider Option</a>
                    <ul class="submenu">
                        <li><a href="?page=addslider">Add Slider</a> </li>
                        <li><a href="?page=sliderlist">Slider List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Post Option</a>
                    <ul class="submenu">
                        <li><a href="?page=addpost">Add Post</a> </li>
                        <li><a href="?page=postlist">Post List</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>