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
    <title>View Product - Gneiss Technology</title>
    <?php include('include/css.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js" integrity="sha512-ff67djVavIxfsnP13CZtuHqf7VyX62ZAObYle+JlObWZvS4/VQkNVaFBOO6eyx2cum8WtiZ0pqyxLCQKC7bjcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                            if (isset($_GET['edit'])) {
                                $fProduct = $db_handle->runQuery("select * from products where product_id = {$_GET['edit']}");
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Product</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="update.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $_GET['edit']; ?>" name="id">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="product_name"
                                                       value="<?php echo $fProduct[0]['product_name']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="small_desc"
                                                       placeholder="Blog Date" value="<?php echo $fProduct[0]['small_desc']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="product_code"
                                                       placeholder="Blog Date" value="<?php echo $fProduct[0]['product_code']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="long_desc"><?php echo $fProduct[0]['long_desc'];?></textarea>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="main_image">
                                                <label class="custom-file-label">Choose Product Image (570*564)</label>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <img src="<?php echo $fProduct[0]['main_image'];?>" class="img-fluid"/>
                                                </div>
                                            </div>
                                            <div class="custom-file mt-3">
                                                <input type="file" class="custom-file-input" name="related_image[]">
                                                <label class="custom-file-label">Choose Related Image (570*564)</label>
                                            </div>
                                            <div class="row mt-3">
                                                    <?php
                                                    $rImage = explode(',',$fProduct[0]['related_images']);
                                                    foreach ($rImage as $img){
                                                        ?>
                                                        <div class="col-6 col-lg-2">
                                                            <img src="<?php echo $img;?>" class="img-fluid">
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                            </div>
                                            <button type="submit" name="update_product" class="btn btn-primary mt-3">
                                                Update
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Product List</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="display min-w850">
                                                <thead>
                                                <tr>
                                                    <th>Sl No</th>
                                                    <th>Product Title</th>
                                                    <th>Small Description</th>
                                                    <th>Main Image</th>
                                                    <th>Product Code</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $fetch_product = $db_handle->runQuery("select * from products order by product_id desc");
                                                $no_fetch_product = $db_handle->numRows("select * from products order by product_id desc");
                                                for ($i = 0; $i < $no_fetch_product; $i++) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i+1;?></td>
                                                        <td><?php echo $fetch_product[$i]['product_name']; ?></td>
                                                        <td><?php echo $fetch_product[$i]['small_desc']; ?></td>
                                                        <td><a href="<?php echo $fetch_product[$i]['main_image']; ?>"
                                                               target="_blank"><img
                                                                    src="<?php echo $fetch_product[$i]['main_image']; ?>"
                                                                    style="height: 100px; width: auto;"/></a></td>
                                                        <td><?php echo $fetch_product[$i]['product_code'];?></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="View_Product?edit=<?php echo $fetch_product[$i]["product_id"]; ?>"
                                                                   class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                        class="fa fa-pencil"></i></a>
                                                                <a onclick="productDelete(<?php echo $fetch_product[$i]["product_id"]; ?>);"
                                                                   class="btn btn-danger shadow btn-xs sharp"><i
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
<script>
    function productDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'get',
                    url: 'delete.php',
                    data: {
                        productID: id
                    },
                    success: function (data) {
                        if (data.toString() === 'P') {
                            Swal.fire(
                                'Not Deleted!',
                                'Your have store in this category.',
                                'error'
                            ).then((result) => {
                                window.location = 'View_Product';
                            });
                        } else {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then((result) => {
                                window.location = 'View_Product';
                            });
                        }
                    }
                });
            } else {
                Swal.fire(
                    'Cancelled!',
                    'Your Product is safe :)',
                    'error'
                ).then((result) => {
                    window.location = 'View_Product';
                });
            }
        })
    }

    CKEDITOR.replace('long_desc');
</script>
</body>

</html>