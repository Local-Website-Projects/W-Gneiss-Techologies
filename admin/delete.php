<?php
session_start();
include('include/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

/*delete blog*/
if(isset($_GET['blogID'])){
    $row = $db_handle->numRows("select * FROM `blog` WHERE blog_id='{$_GET['blogID']}'");

    if ($row) {
        unlink($row[0]['file']);
        $db_handle->insertQuery("delete from blog where blog_id=" . $_GET['blogID'] . "");
        echo 'success';
    } else {
        echo 'P';
    }
}