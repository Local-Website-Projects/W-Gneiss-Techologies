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
    <title>View Blog - Gneiss Technology</title>
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
                                $fBlog = $db_handle->runQuery("select * from blog where blog_id = {$_GET['edit']}");
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Blog</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="update.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $_GET['edit']; ?>" name="id">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="title"
                                                       value="<?php echo $fBlog[0]['title']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" class="form-control input-rounded" name="date"
                                                       placeholder="Blog Date" value="<?php echo $fBlog[0]['date']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="blog_details"><?php echo $fBlog[0]['description'];?></textarea>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="blog_image">
                                                <label class="custom-file-label">Choose Blog Image (770*442)</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="<?php echo $fBlog[0]['file'];?>" class="img-fluid"/>
                                                </div>
                                            </div>
                                            <button type="submit" name="update_blog" class="btn btn-primary mt-3">
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
                                        <h4 class="card-title">Blog List</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="display min-w850">
                                                <thead>
                                                <tr>
                                                    <th>Blog Title</th>
                                                    <th>Date</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $fetch_blog = $db_handle->runQuery("select * from blog order by blog_id desc");
                                                $no_fetch_blog = $db_handle->numRows("select * from blog order by blog_id desc");
                                                for ($i = 0; $i < $no_fetch_blog; $i++) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $fetch_blog[$i]['title']; ?></td>
                                                        <td><?php echo $fetch_blog[$i]['date']; ?></td>
                                                        <td><a href="<?php echo $fetch_blog[$i]['file']; ?>"
                                                               target="_blank"><img
                                                                        src="<?php echo $fetch_blog[$i]['file']; ?>"
                                                                        style="height: 100px; width: auto;"/></a></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="View_Blog?edit=<?php echo $fetch_blog[$i]["blog_id"]; ?>"
                                                                   class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                            class="fa fa-pencil"></i></a>
                                                                <a onclick="blogDelete(<?php echo $fetch_blog[$i]["blog_id"]; ?>);"
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
    function blogDelete(id) {
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
                        blogID: id
                    },
                    success: function (data) {
                        if (data.toString() === 'P') {
                            Swal.fire(
                                'Not Deleted!',
                                'Your have store in this category.',
                                'error'
                            ).then((result) => {
                                window.location = 'View_Blog';
                            });
                        } else {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then((result) => {
                                window.location = 'View_Blog';
                            });
                        }
                    }
                });
            } else {
                Swal.fire(
                    'Cancelled!',
                    'Your Blog is safe :)',
                    'error'
                ).then((result) => {
                    window.location = 'View_Blog';
                });
            }
        })
    }

    CKEDITOR.replace('blog_details');
</script>
</body>

</html>