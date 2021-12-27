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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik FCR Kandang A</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangA-FCR"></div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik EggMas & HenDay Kandang A</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangA"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik FCR Kandang B</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangB-FCR"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik EggMas & HenDay Kandang B</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangB"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik FCR Kandang C</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangC-FCR"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik EggMas & HenDay Kandang C</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangC"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik FCR Kandang D</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangD-FCR"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik EggMas & HenDay Kandang D</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-kandangD"></div>
                    </div>
                </div>
            </div>
            <!-- progressbar static data end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>


<?php 
    $GetMin = mysqli_query($conn, "SELECT * FROM kandang_a");
    $jumlahData = mysqli_num_rows($GetMin);
 
    $angka = array();
    $s = 1;
 
    $dataMinggu = array();
    $dataHenday = array();
    $GetFCRM = array();
    $FCR = array();

    //mengambil data jumlah ayam kandang A
    $ayamA = mysqli_query($conn, "SELECT * FROM ayam WHERE namaKandang = 'kandang_a'");

    while($Data = mysqli_fetch_array($ayamA)){
       $jumlahAyamA =  $Data['JumlahAyam'];
    }

    //mengambil data jumlah ayam kandang B
    $ayamB = mysqli_query($conn, "SELECT * FROM ayam WHERE namaKandang = 'kandang_b'");

    while($Data = mysqli_fetch_array($ayamB)){
       $jumlahAyamB =  $Data['JumlahAyam'];
    }

    //mengambil data jumlah ayam kandang C
    $ayamC = mysqli_query($conn, "SELECT * FROM ayam WHERE namaKandang = 'kandang_c'");

    while($Data = mysqli_fetch_array($ayamC)){
       $jumlahAyamC =  $Data['JumlahAyam'];
    }

    //mengambil data jumlah ayam kandang A
    $ayamD = mysqli_query($conn, "SELECT * FROM ayam WHERE namaKandang = 'kandang_d'");

    while($Data = mysqli_fetch_array($ayamD)){
       $jumlahAyamD =  $Data['JumlahAyam'];
    }


 
     
     for ($i = 0; ; $i+=7) {
         if ($i > $jumlahData) {
             break;
         }
         $angka[] = $i;
 
     }
 
     
     for($i = 1; $i<count($angka); $i++){
 
        $angka[$i-1] += 1;

        //Data Chart Kandang A
        $dataFCRA[$i] = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]); 
        $GetFCRA[$i] = mysqli_fetch_array($dataFCRA[$i]);
        $FCRA[$i] = $GetFCRA[$i]['JumlahPakan']/$GetFCRA[$i]['JumlahBT'];

        $dataEMA[$i] = mysqli_query($conn, "SELECT SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetEMA[$i] = mysqli_fetch_array($dataEMA[$i]);
        $EggMasA[$i] = $GetEMA[$i]['JumlahBT']/$jumlahAyamA * 1000;

        $dataHDA[$i] = mysqli_query($conn, "SELECT SUM(jumlah_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetHDA[$i] = mysqli_fetch_array($dataHDA[$i]);
        $HenDayA[$i] = $GetHDA[$i]['JumlahBT']/$jumlahAyamA * 100;

        //Data Chart Kandang B
        $dataFCRB[$i] = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_b WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]); 
        $GetFCRB[$i] = mysqli_fetch_array($dataFCRB[$i]);
        $FCRB[$i] = $GetFCRB[$i]['JumlahPakan']/$GetFCRB[$i]['JumlahBT'];

        $dataEMB[$i] = mysqli_query($conn, "SELECT SUM(berat_telur) AS JumlahBT FROM kandang_b WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetEMB[$i] = mysqli_fetch_array($dataEMB[$i]);
        $EggMasB[$i] = $GetEMB[$i]['JumlahBT']/$jumlahAyamB * 1000;

        $dataHDB[$i] = mysqli_query($conn, "SELECT SUM(jumlah_telur) AS JumlahBT FROM kandang_b WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetHDB[$i] = mysqli_fetch_array($dataHDB[$i]);
        $HenDayB[$i] = $GetHDB[$i]['JumlahBT']/$jumlahAyamB * 100;

        //Data Chart Kandang C
        $dataFCRC[$i] = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_c WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]); 
        $GetFCRC[$i] = mysqli_fetch_array($dataFCRC[$i]);
        $FCRC[$i] = $GetFCRC[$i]['JumlahPakan']/$GetFCRC[$i]['JumlahBT'];

        $dataEMC[$i] = mysqli_query($conn, "SELECT SUM(berat_telur) AS JumlahBT FROM kandang_c WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetEMC[$i] = mysqli_fetch_array($dataEMC[$i]);
        $EggMasC[$i] = $GetEMC[$i]['JumlahBT']/$jumlahAyamC * 1000;

        $dataHDC[$i] = mysqli_query($conn, "SELECT SUM(jumlah_telur) AS JumlahBT FROM kandang_c WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetHDC[$i] = mysqli_fetch_array($dataHDC[$i]);
        $HenDayC[$i] = $GetHDC[$i]['JumlahBT']/$jumlahAyamC * 100;
        
        //Data Chart Kandang D
        $dataFCRD[$i] = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_d WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]); 
        $GetFCRD[$i] = mysqli_fetch_array($dataFCRD[$i]);
        $FCRD[$i] = $GetFCRD[$i]['JumlahPakan']/$GetFCRD[$i]['JumlahBT'];

        $dataEMD[$i] = mysqli_query($conn, "SELECT SUM(berat_telur) AS JumlahBT FROM kandang_d WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetEMD[$i] = mysqli_fetch_array($dataEMD[$i]);
        $EggMasD[$i] = $GetEMD[$i]['JumlahBT']/$jumlahAyamC * 1000;

        $dataHDD[$i] = mysqli_query($conn, "SELECT SUM(jumlah_telur) AS JumlahBT FROM kandang_d WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
        $GetHDD[$i] = mysqli_fetch_array($dataHDD[$i]);
        $HenDayD[$i] = $GetHDD[$i]['JumlahBT']/$jumlahAyamC * 100;
         
    }
 

 
?>

<?php 
    include 'komponen/closing-pages.php';
?>