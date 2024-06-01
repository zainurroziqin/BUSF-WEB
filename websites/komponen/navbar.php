 <?php 

if ( !isset($_SESSION["login"])){
    header("Location: Login");
    exit;
}
   ?>
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
          
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand" class="img-fluid animation-toggle animated" data-animate="flip">
            <img src="../../assets/images/logo1.png" alt="" alt="img" class="img-fluid animation-toggle animated" data-animate="jackInTheBox" >
            
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <i><i class="fas fa-user"></i></i>
                            &nbsp;
                            <span><?php echo $_SESSION['nama' ] ; ?> </span>
                        </div>
                        <ul class="pro-body">
                            <li-><a href="logout.php" class="dropdown-item"><i class="fas fa-fw fa-sign-out-alt"></i> Keluar</a></li->
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    

</header>