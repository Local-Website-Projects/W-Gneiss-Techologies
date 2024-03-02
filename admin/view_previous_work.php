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
    <title>View Previous Works - Gneiss Technology</title>
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
                            if (isset($_GET['edit'])) {
                                $fwork = $db_handle->runQuery("select * from previous_works where id = {$_GET['edit']}");
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Previous Work</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="update.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $_GET['edit']; ?>" name="id">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-rounded" name="title"
                                                       value="<?php echo $fwork[0]['title']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="description" value = "<?php echo $fwork[0]['small_desc'];?>">
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="work_image">
                                                <label class="custom-file-label">Choose Blog Image (770*442)</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="<?php echo $fwork[0]['file'];?>" class="img-fluid"/>
                                                </div>
                                            </div>
                                            <button type="submit" name="update_work" class="btn btn-primary mt-3">
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
                                                    <th>Sl No.</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $fetch_work = $db_handle->runQuery("select * from previous_works order by id desc");
                                                $no_fetch_work = $db_handle->numRows("select * from previous_works order by id desc");
                                                for ($i = 0; $i < $no_fetch_work; $i++) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i+1;?></td>
                                                        <td><?php echo $fetch_work[$i]['title']; ?></td>
                                                        <td><?php echo $fetch_work[$i]['small_desc']; ?></td>
                                                        <td><a href="<?php echo $fetch_work[$i]['file']; ?>"
                                                               target="_blank"><img
                                                                    src="<?php echo $fetch_work[$i]['file']; ?>"
                                                                    style="height: 100px; width: auto;"/></a></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="View_Previous_Work?edit=<?php echo $fetch_work[$i]["id"]; ?>"
                                                                   class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                        class="fa fa-pencil"></i></a>
                                                                <a onclick="workDelete(<?php echo $fetch_work[$i]["id"]; ?>);"
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
    function workDelete(id) {
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
                        workID: id
                    },
                    success: function (data) {
                        if (data.toString() === 'P') {
                            Swal.fire(
                                'Not Deleted!',
                                'Your have store in this category.',
                                'error'
                            ).then((result) => {
                                window.location = 'View_Previous_Work';
                            });
                        } else {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then((result) => {
                                window.location = 'View_Previous_Work';
                            });
                        }
                    }
                });
            } else {
                Swal.fire(
                    'Cancelled!',
                    'Your Work history is safe :)',
                    'error'
                ).then((result) => {
                    window.location = 'View_Previous_Work';
                });
            }
        })
    }
</script>
</body>

</html>