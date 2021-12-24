 <?php 
 session_start();
if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}



   ?>
<!-- <?php 
// include '../configs/koneksi.php';
// $query = "SELECT * FROM user WHERE nama = $_SESSION ['nama']";
// $user = mysqli_query($conn,$query);


 // $user = query("SELECT * FROM user");
 ?> -->

<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" img src="../assets/images/user/<?= $_SESSION['gambar']; ?>" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details"><?php echo $_SESSION['nama' ] ; ?></div>
                    </div>
                </div>
               
            </div>
           <br>
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>

                <li class="nav-item"><a href="Dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-school"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>
                
                <li class="nav-item pcoded-menu-caption">
                    <label>Data</label>
                </li>
                <li class="nav-item"><a href="Pengguna.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-user"></i></span><span class="pcoded-mtext">Pengguna</span></a></li>
                <li class="nav-item"><a href="kandangA.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-dumpster"></i></span><span class="pcoded-mtext">Kandang A</span></a></li>
                <li class="nav-item"><a href="KandangB.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-dumpster"></i></span><span class="pcoded-mtext">Kandang B</span></a></li>
                <li class="nav-item"><a href="KandangC.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-dumpster"></i></span><span class="pcoded-mtext">Kandang C</span></a></li>
                <li class="nav-item"><a href="KandangD.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-dumpster"></i></span><span class="pcoded-mtext">Kandang D</span></a></li>
                
                <li class="nav-item pcoded-menu-caption">
                    <label>Report</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="fas fa-calendar-week"></i></span><span class="pcoded-mtext">Laporan Kandang</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="RkandangA.php">Kandang A</a></li>
                        <li><a href="RkandangB.php">Kandang B</a></li>
                        <li><a href="RkandangC.php">Kandang C</a></li>
                        <li><a href="RkandangD.php">kandang D</a></li>
                    </ul>
				</li>
              
                <!-- <li class="nav-item"><a href="Logout.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-fw fa-sign-out-alt"></i></span><span class="pcoded-mtext">Logout</span></a></li> -->
                
            </ul>
            
        </div>
    </div>
</nav>
