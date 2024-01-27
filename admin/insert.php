<?php
session_start();
include('include/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");

/*login code*/
if(isset($_POST['login'])){
    $email = $db_handle->checkValue($_POST['email']);
    $pass = $db_handle->checkValue($_POST['password']);

    $query = $db_handle->runQuery("select * from admin where email = '$email' and pass = '$pass'");
    $no_query = $db_handle->numRows("select * from admin where email = '$email' and pass = '$pass'");
    if($query){
        if ($no_query == 1){
            session_start();
            $_SESSION['admin'] = $query[0]['id'];
            echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='Home';
                </script>";
        }
    }else {
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Login';
                </script>";
    }
}


/*add new category*/
if(isset($_POST['add_category'])){
    $cat = $db_handle->checkValue($_POST['category_name']);
    $insert_query = $db_handle->insertQuery("INSERT INTO `category`(`category_name`, `inserted_at`) VALUES ('$cat','$inserted_at')");
    if($insert_query){
        echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='Add_Category';
                </script>";
    }else{
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add_Category';
                </script>";
    }
}