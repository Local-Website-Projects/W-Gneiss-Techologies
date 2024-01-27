<?php
session_start();
if(isset($_SESSION['admin'])){
    echo "<script>
                window.location.href='Home';
                </script>";
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - Gneiss Technology</title>
    <meta name="description" content=""/>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon.png">
    <link href="public/vendor/toastr/css/toastr.min.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                <form action="insert.php" method="post">
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="login" class="btn btn-primary btn-block">Sign Me In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="public/vendor/global/global.min.js" type="text/javascript"></script>
<script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="public/vendor/toastr/js/toastr.min.js" type="text/javascript"></script>
<script src="public/js/plugins-init/toastr-init.js" type="text/javascript"></script>
<script src="public/js/custom.min.js" type="text/javascript"></script>
<script src="public/js/deznav-init.js" type="text/javascript"></script>
</body>

</html>