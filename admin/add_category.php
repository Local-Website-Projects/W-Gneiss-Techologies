<?php
session_start();
include('include/dbConfig.php');
$db_handle = new DBController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add Category - Gneiss Technology</title>
    <?php include ('include/css.php');?>
</head>
<body>
<?php include ('include/preloader.php');?>
<div id="main-wrapper">
    <?php include ('include/header_logo.php');?>
    <?php include ('include/header.php');?>
    <?php include ('include/navbar.php');?>

    <!--main body starts-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Category</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Category</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="insert.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control input-rounded" name="category_name" placeholder="Category Name">
                        </div>
                        <button type="submit" name="add_category" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--main body ends-->


    <div class="footer">
        <div class="copyright">
            <p>Copyright © Gneiss Technology</p>
        </div>
    </div>
</div>
<?php include ('include/js.php');?>
</body>

</html>