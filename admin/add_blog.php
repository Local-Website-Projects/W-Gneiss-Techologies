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
    <title>Add Blog - Gneiss Technology</title>
    <?php include ('include/css.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js" integrity="sha512-ff67djVavIxfsnP13CZtuHqf7VyX62ZAObYle+JlObWZvS4/VQkNVaFBOO6eyx2cum8WtiZ0pqyxLCQKC7bjcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Blog</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control input-rounded" name="blog_title" placeholder="Blog Title" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control input-rounded" name="date" placeholder="Blog Title" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="blog_details" placeholder="Blog Details" required></textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="blog_image" required>
                            <label class="custom-file-label">Choose Blog Image (770*442)</label>
                        </div>
                        <button type="submit" name="add_blog" class="btn btn-primary mt-3">Submit</button>
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
<script>
    CKEDITOR.replace('blog_details');
</script>
</body>

</html>