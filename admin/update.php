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


/*update blog*/
if(isset($_POST['update_blog'])){
    $id = $db_handle->checkValue($_POST['id']);
    $title = $db_handle->checkValue($_POST['title']);
    $date = $db_handle->checkValue($_POST['date']);
    $description = $db_handle->checkValue($_POST['blog_details']);
    $image = '';
    $query = '';
    if (!empty($_FILES['blog_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['blog_image']['name'];
        $file_size = $_FILES['blog_image']['size'];
        $file_tmp = $_FILES['blog_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `blog` WHERE blog_id='{$id}'");
            unlink($data[0]['file']);
            move_uploaded_file($file_tmp, "public/images/blog/" . $file_name);
            $image = "public/images/blog/" . $file_name;
            $query .= ",`file`='" . $image . "'";
        }
    }
    $update = $db_handle->insertQuery("UPDATE `blog` SET `title`='$title',`date`='$date',`description`='$description',`updated_at`='$updated_at'". $query ." WHERE blog_id = {$id}");
    if($update){
        echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='View_Blog';
                </script>";
    }else {
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='View_Blog';
                </script>";
    }
}

/*update previous works*/
if(isset($_POST['update_work'])){
    $id = $db_handle->checkValue($_POST['id']);
    $title = $db_handle->checkValue($_POST['title']);
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    $query = '';
    if (!empty($_FILES['work_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['work_image']['name'];
        $file_size = $_FILES['work_image']['size'];
        $file_tmp = $_FILES['work_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `previous_works` WHERE id='{$id}'");
            unlink($data[0]['file']);
            move_uploaded_file($file_tmp, "public/images/works/" . $file_name);
            $image = "public/images/works/" . $file_name;
            $query .= ",`file`='" . $image . "'";
        }
    }
    $update = $db_handle->insertQuery("UPDATE `previous_works` SET `title`='$title',`small_desc`='$description',`updated_at`='$updated_at'". $query ." WHERE id = {$id}");
    if($update){
        echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='View_Previous_Work';
                </script>";
    }else {
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='View_Previous_Work';
                </script>";
    }
}


/*update products*/
if (isset($_POST['update_product'])) {
    $id = $db_handle->checkValue($_POST['id']);
    $product_name = $db_handle->checkValue($_POST['product_name']);
    $small_desc = $db_handle->checkValue($_POST['small_desc']);
    $long_desc = $db_handle->checkValue($_POST['long_desc']);
    $product_code = $db_handle->checkValue($_POST['product_code']);

    $image = '';
    $query = '';
    $rQuery = '';
    if (!empty($_FILES['main_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['main_image']['name'];
        $file_size = $_FILES['main_image']['size'];
        $file_tmp = $_FILES['main_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif") {
            $image = '';
        } else {
            $data = $db_handle->runQuery("select * FROM `products` WHERE product_id='{$id}'");
            unlink($data[0]['main_image']);
            move_uploaded_file($file_tmp, "public/images/product/" . $file_name);
            $image = "public/images/product/" . $file_name;
            $query .= ",`main_image`='" . $image . "'";
        }
    }
    if (!empty($_FILES['related_image']['tmp_name'][0])) {
        // At least one image is selected
        $row = $db_handle->numRows("select * FROM `products` WHERE product_id='$id'");

        if ($row) {
            $fileNames = explode(',', $row[0]['related_image']);
            foreach ($fileNames as $fileName) {
                $fileName = trim($fileName);
                unlink($fileName);
            }
        }
        $dataFileName = [];
        foreach ($_FILES['related_image']['tmp_name'] as $index => $uploadedFile) {
            $originalFileName = $_FILES['related_image']['name'][$index];
            $RandomAccountNumber = mt_rand(1, 99999);
            $newFileName = "public/images/product/" . $RandomAccountNumber . '_' . $originalFileName;
            move_uploaded_file($uploadedFile, $newFileName);
            $dataFileName[] = $newFileName;
        }

        $databaseValue = implode(',', $dataFileName);
        $related_image = $databaseValue;
        $rQuery .= ",`related_image`='" . $related_image . "'";
    }

    $data = $db_handle->insertQuery("UPDATE `products` SET `product_name`='$product_name',`small_desc`='$small_desc',`long_desc`='$long_desc',`updated_at`='$updated_at',`product_code`='$product_code' " . $query . $rQuery ." WHERE `product_id` = '$id'");
    if($data){
        echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='View_Product';
                </script>";
    } else{
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='View_Product';
                </script>";
    }
}
