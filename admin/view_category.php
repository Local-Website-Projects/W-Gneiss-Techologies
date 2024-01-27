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
    <title>View Category - Gneiss Technology</title>
    <?php include('include/css.php'); ?>
</head>
<body>
<?php include('include/preloader.php'); ?>
<div id="main-wrapper">
    <?php include('include/header_logo.php'); ?>
    <?php include('include/header.php'); ?>
    <?php include('include/navbar.php'); ?>

    <!--main body starts-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            if(isset($_GET['edit'])){
                                $fetch_cat = $db_handle->runQuery("select * from category where cat_id = {$_GET['edit']}");
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Category</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="update.php" method="POST">
                                            <input type="hidden" value="<?php echo $_GET['edit'];?>" name="id">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="category_name" value="<?php echo $fetch_cat[0]['category_name'];?>">
                                            </div>
                                            <button type="submit" name="update_category" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Category List</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="display min-w850">
                                                <thead>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $fetch_cat = $db_handle->runQuery("select * from category order by cat_id desc");
                                                $no_fetch_cat = $db_handle->numRows("select * from category order by cat_id desc");
                                                for ($i = 0; $i < $no_fetch_cat; $i++){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $fetch_cat[$i]['category_name'];?></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="View_Category?edit=<?php echo $fetch_cat[$i]['cat_id'];?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                            class="fa fa-pencil"></i></a>
                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
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

<?php include('include/js.php'); ?>
</body>

</html>