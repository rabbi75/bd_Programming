<?php
    if (isset($_GET['delpid'])) {
        $deid = base64_decode($_GET['delpid']);
        $sql = "DELETE FROM tbl_page WHERE id='$deid'";
        $delpage = mysqli_query($con,$sql);
        if ($delpage) {
            echo "<span class='success'>Page Deleted Successfully</span>";
            echo "<script>window.location = '?page=dashboard';</script>";
        }else{
            echo "<span class='success'>Page Not Deleted</span>";
            echo "<script>window.location = '?page=dashboard';</script>";
        }
    }
?>