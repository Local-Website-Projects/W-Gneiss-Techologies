<?php
session_start();
include('include/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$updated_at = date("Y-m-d H:i:s");

/*update password*/
if(isset($_POST['update_password'])){
    $old = $db_handle->checkValue($_POST['old_password']);
    $new = $db_handle->checkValue($_POST['new_password']);
    $query = $db_handle->runQuery("select pass from admin where id = {$_SESSION['admin']}");
    if($query){
        if($old == $query[0]['pass']){
            $update = $db_handle->insertQuery("update admin set pass = '$new' where id = {$_SESSION['admin']}");
            if($update){
                echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='Profile';
                </script>";
            }
        }else {
            echo "<script>
                document.cookie = 'alert = 3;';
                window.location.href='Profile';
                </script>";
        }
    } else {
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Profile';
                </script>";
    }
}


/*update category*/
if(isset($_POST['update_category'])){
    $id = $db_handle->checkValue($_POST['id']);
    $cat_name = $db_handle->checkValue($_POST['category_name']);

    $update_query = $db_handle->insertQuery("UPDATE `category` SET `category_name`='$cat_name',`updated_at`='$updated_at' WHERE cat_id = '$id'");
    if($update_query){
        echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='View_Category';
                </script>";
    }else {
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='View_Category';
                </script>";
    }
}

