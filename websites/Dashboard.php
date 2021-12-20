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
                <div class="card  text-white ">
                    <div class="card-body text-center">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1" align="left">
                                Kandang A</div>
                     <div>
                    	<h5 class="font-weight-bold text-success" align="left" > <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_a WHERE keterangan = 'Terkonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Dikonfirmasi"; ?> <i class="fas fa-check"  ></i> </h5>  
                                  </div>

                                  <!-- munculkan data yang belum dikonfirmasi -->
                            <div> 
                            <h5 class = "font-weight-bold text-danger" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_a WHERE keterangan = 'Belum Dikonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Menunggu"; ?> <i class="fas fa-spinner"></i></h5>
                              </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;">
                                <!-- munculkan Total Data  -->
                            <div class="h5 font-weight-bold text-primary" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_a");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Total Data"; ?></i></div>                      
                    </div>

                </div>

            </div>
               <div class="col-sm-3">
                <div class="card  text-white ">
                    <div class="card-body text-center">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1" align="left">
                                Kandang B</div>
                     <div>
                        <h5 class="font-weight-bold text-success" align="left" > <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_b WHERE keterangan = 'Terkonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Dikonfirmasi"; ?> <i class="fas fa-check"></i> </h5>  
                                  </div>

                                  <!-- munculkan data yang belum dikonfirmasi -->
                            <div> 
                            <h5 class = "font-weight-bold text-danger" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_b WHERE keterangan = 'Belum Dikonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Menunggu"; ?> <i class="fas fa-spinner"></i></h5>
                              </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;">
                                <!-- munculkan Total Data  -->
                            <div class="h5 font-weight-bold text-primary" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_b");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Total Data"; ?></i></div>                      
                    </div>

                </div>

            </div>
             <div class="col-sm-3">
                <div class="card  text-white ">
                    <div class="card-body text-center">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1" align="left">
                                Kandang C</div>
                     <div>
                        <h5 class="font-weight-bold text-success" align="left" > <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_c WHERE keterangan = 'Terkonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Dikonfirmasi"; ?> <i class="fas fa-check"></i> </h5>  
                                  </div>

                                  <!-- munculkan data yang belum dikonfirmasi -->
                            <div> 
                            <h5 class = "font-weight-bold text-danger" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_c WHERE keterangan = 'Belum Dikonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Menunggu"; ?> <i class="fas fa-spinner"></i></h5>
                              </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;">
                                <!-- munculkan Total Data  -->
                            <div class="h5 font-weight-bold text-primary" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_c");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Total Data"; ?></i></div>                      
                    </div>

                </div>

            </div>
               <div class="col-sm-3">
                <div class="card  text-white ">
                    <div class="card-body text-center">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1" align="left">
                                Kandang D</div>
                     <div>
                        <h5 class="font-weight-bold text-success" align="left" > <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_d WHERE keterangan = 'Terkonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Dikonfirmasi"; ?> <i class="fas fa-check"></i> </h5>  
                                  </div>

                                  <!-- munculkan data yang belum dikonfirmasi -->
                            <div> 
                            <h5 class = "font-weight-bold text-danger" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_d WHERE keterangan = 'Belum Dikonfirmasi'");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Menunggu"; ?> <i class="fas fa-spinner"></i></h5>
                              </div>

                            <hr style="height:1px;border:none;color:#333;background-color:#333;">
                                <!-- munculkan Total Data  -->
                            <div class="h5 font-weight-bold text-primary" align="left"> <?php
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM kandang_d");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai Total Data"; ?></i></div>                      
                    </div>

                </div>

            </div>
            <!--  -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik Data Kandang A</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandang-a"></div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik Data Kandang B</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandang-b"></div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik Data Kandang C</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandang-c"></div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik Data Kandang D</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandang-d"></div>
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