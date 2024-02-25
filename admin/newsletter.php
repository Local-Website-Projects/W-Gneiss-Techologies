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
    <title>View Newsletter - Gneiss Technology</title>
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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Newsletter List</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display min-w850">
                                            <thead>
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Email</th>
                                                <th>Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $fetch_newsletter = $db_handle->runQuery("select * from newsletter order by id desc");
                                            $no_fetch_newsletter = $db_handle->numRows("select * from newsletter order by id desc");
                                            for ($i = 0; $i < $no_fetch_newsletter; $i++) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i+1;?></td>
                                                    <td><?php echo $fetch_newsletter[$i]['email']; ?></td>
                                                    <td><?php echo date_format(new DateTime($fetch_newsletter[$i]['inserted_at']), 'd M, Y'); ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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