<meta name="description" content="Some description for the page"/>
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon.png">
<link href="public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet"/>
<link href="public/vendor/toastr/css/toastr.min.css" rel="stylesheet" type="text/css"/>
<link href="public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="public/css/style.css" rel="stylesheet" type="text/css"/>

<?php
if(!isset($_SESSION['admin'])){
    echo "
    <script>
    window.location.href = 'Login';
</script>
    ";
} else {
    $admin_data = $db_handle->runQuery("select * from admin where id = {$_SESSION['admin']}");
}

?>