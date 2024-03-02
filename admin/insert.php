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


/*add blog*/
if(isset($_POST['add_blog'])){
    $blog_title = $db_handle->checkValue($_POST['blog_title']);
    $date = $db_handle->checkValue($_POST['date']);
    $blog_details = $db_handle->checkValue($_POST['blog_details']);
    $image = '';
    if (!empty($_FILES['blog_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['blog_image']['name'];
        $file_size = $_FILES['blog_image']['size'];
        $file_tmp  = $_FILES['blog_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
            echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add_Blog';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "public/images/blog/" . $file_name);
            $image = "public/images/blog/" . $file_name;
        }
    }
    $blog = $db_handle->insertQuery("INSERT INTO `blog`(`title`, `date`,`file`, `description`, `inserted_at`) VALUES ('$blog_title','$date','$image','$blog_details','$inserted_at')");
    if($blog){
        echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='Add_Blog';
                </script>";
    }else{
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add_Blog';
                </script>";
    }
}


/*add previous works*/
if(isset($_POST['add_work'])){
    $title = $db_handle->checkValue($_POST['title']);
    $description = $db_handle->checkValue($_POST['description']);
    $image = '';
    if (!empty($_FILES['work_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['work_image']['name'];
        $file_size = $_FILES['work_image']['size'];
        $file_tmp  = $_FILES['work_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
            echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add_Previous_Work';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "public/images/works/" . $file_name);
            $image = "public/images/works/" . $file_name;
        }
    }
    $work = $db_handle->insertQuery("INSERT INTO `previous_works`(`title`, `small_desc`, `file`, `inserted_at`) VALUES ('$title','$description','$image','$inserted_at')");
    if($work){
        echo "<script>
                document.cookie = 'alert = 4;';
                window.location.href='Add_Previous_Work';
                </script>";
    }else{
        echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add_Previous_Work';
                </script>";
    }
}

/*add products*/
if(isset($_POST['add_product'])){
    $product_title = $db_handle->checkValue($_POST['product_title']);
    $small_desc = $db_handle->checkValue($_POST['small_desc']);
    $product_code = $db_handle->checkValue($_POST['product_code']);
    $long_desc = $db_handle->checkValue($_POST['long_desc']);
    $image = '';
    $related_image = '';
    if (!empty($_FILES['product_image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['product_image']['name'];
        $file_size = $_FILES['product_image']['size'];
        $file_tmp  = $_FILES['product_image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $image = '';
            echo "<script>
                document.cookie = 'alert = 5;';
                window.location.href='Add_Product';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "public/images/product/" . $file_name);
            $image = "public/images/product/" . $file_name;
        }
    }
    if (!empty($_FILES['related_image']['tmp_name'][0])) {
        // At least one image is selected

        $dataFileName = []; // Array to store the file names

        // Loop through each uploaded image file
        foreach ($_FILES['related_image']['tmp_name'] as $index => $uploadedFile) {
            $originalFileName = $_FILES['related_image']['name'][$index];
            $RandomAccountNumber = mt_rand(1, 99999);
            $newFileName = "public/images/product/" . $RandomAccountNumber . '_' . $originalFileName;
            move_uploaded_file($uploadedFile, $newFileName);
            $dataFileName[] = $newFileName;
        }

        $databaseValue = implode(',', $dataFileName);
        $related_image = $databaseValue;
    } else {
        $related_image = '';
    }

    $product = $db_handle->insertQuery("INSERT INTO `products`(`product_name`, `small_desc`, `long_desc`, `main_image`, `related_images`, `inserted_at`, `product_code`) VALUES ('$product_title','$small_desc','$long_desc','$image','$related_image','$inserted_at','$product_code')");

    if($product){
        echo "
        <script>
        document.cookie = 'alert = 4;';
        window.location.href='Add_Product';
</script>
        ";
    } else {
        echo "
        <script>
        document.cookie = 'alert = 5;';
        window.location.href='Add_Product';
</script>
        ";
    }

}