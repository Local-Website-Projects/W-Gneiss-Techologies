<?php
if(isset($_SESSION['user'])){
    $fetch_user = $db_handle->runQuery("select * from users where user_id = {$_SESSION['user']}");
}
?>
<div class="topbar-one">
    <div class="container">
        <div class="topbar-one__inner">
            <ul class="list-unstyled topbar-one__info">
                <li class="topbar-one__info__item">
                    <i class="fas fa-envelope topbar-one__info__icon"></i>
                    <a href="mailto:gneisstechnologies@gmail.com">gneisstechnologies@gmail.com</a>
                </li>
                <li class="topbar-one__info__item">
                    <i class="fas fa-map-marker-alt topbar-one__info__icon"></i>
                    <a href="https://www.google.com/maps">500/1 Adiluzzaman Road, Mohammadnogor, Gollamary, Khulna</a>
                </li>
            </ul><!-- /.list-unstyled topbar-one__info -->
            <ul class="topbar-one__links">
                <?php
                if(isset($_SESSION['user'])){
                    ?>
                    <li><a href="#"><?php echo $fetch_user[0]['full_name'];?></a></li>
                    <li><a href="Logout">Logout</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="Login">Login</a></li>
                    <li><a href="Register">Register</a></li>
                    <?php
                }
                ?>
                <li><a href="Services">Service</a></li>
            </ul><!-- /.topbar-one__links -->
        </div><!-- /.topbar-one__inner -->
    </div><!-- /.container-fluid -->
</div>