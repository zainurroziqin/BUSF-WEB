<?php 
    include 'komponen/starting-pages.php';
    include 'komponen/sidebar.php';
    include 'komponen/navbar.php';
    include '../configs/koneksi.php';

    if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- visitors  start -->
            <div class="col-sm-3">
                <div class="card bg-c-green text-white widget-visitor-card">
                    <div class="card-body text-center">
                    	<h2 class="text-white"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM user");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                 echo "
                                  $GetNilai";?></h2>
                        <h6 class="text-white">Pengguna</h6>
                        <a href="Pengguna.php" ><p class="card-text text-white">Lihat Detail >></p></a>
                        <i class="feather icon-user-plus"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-c-green text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">14</h2>
                        <h6 class="text-white">Active Users</h6>
                        <i class="feather icon-user-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-c-yellow text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">1</h2>
                        <h6 class="text-white">Pending Users</h6>
                        <i class="feather icon-user-minus"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-c-yellow text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">16</h2>
                        <h6 class="text-white">Active Memberships</h6>
                        <i class="feather icon-users"></i>
                    </div>
                </div>
            </div>
            <!-- visitors  end -->
            <!-- progressbar static data start -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Total collected all time</h5>
                    </div>
                    <div class="card-body">
                        <div id="collected-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h6>This Month</h6>
                        <div class="row mt-3">
                            <div class="col-6">
                                <span class="d-block text-uppercase">Amount</span>
                                <h3 class="mt-3">$2,144</h3>
                                <div class="mt-3" id="transactions1"></div>
                            </div>
                            <div class="col-6">
                                <span class="d-block text-uppercase">Sales</span>
                                <h3 class="mt-3">100</h3>
                                <div class="mt-3" id="transactions2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sales by membership</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart"></div>
                    </div>
                </div>
            </div>
            <!-- progressbar static data end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<?php 
    include 'komponen/closing-pages.php';
?>