<?php

    include 'komponen/starting-pages.php';
    include 'komponen/sidebar.php';
    include 'komponen/navbar.php';
    include '../configs/koneksi.php';
?>
<?php 
$kandang_a= query("SELECT * FROM kandang_a")
 ?>
<!-- <div class="pcoded-main-container"> -->
    <section class="pcoded-main-container">

        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Kandang A</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Kandang</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h5>Kandang A</h5> --><center>
                       <h3 >LAPORAN DATA KANDANG A</h3>
                       <h3>BAROKAH UTAMA FARM</h3>
                       </center>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                 <tr align="center">
                                     <td rowspan="3">Hari</td>
                                      <td rowspan="3">Minggu</td>
                                       <td rowspan="3">Tanggal</td>
                                        <td colspan="2">Jumlah ayam</td>
                                      
                                           <td colspan="8" >Pemberian Pakan</td>
                                            <td colspan="2">Produksi Telur</td>
                                      <td colspan="3">Suhu Kandang</td>
                                      
                                 </tr>
                                 <tr align="center">
                                     
                                      
                                     
                                        <td rowspan="2">Afkir</td>
                                         <td rowspan="2">Mati</td>
                                          <td rowspan="2">Total Pakan</td>
                                           <td colspan="6">Sisa Pakan Per Baris</td>
                                           
                                          <td rowspan="2">Total</td>
                                           <td rowspan="2">Jumlah</td>
                                            <td rowspan="2">Berat</td>
                                      <td rowspan="2">Pagi</td>
                                       <td rowspan="2">Siang</td>
                                        <td rowspan="2">Sore</td>
                                       
                                 </tr>
                                  <tr align="center">
                                    
                                    
                                     
                                        
                                         
                                         
                                           
                                            <td>1</td>
                                      <td>2</td>
                                       <td>3</td>
                                        <td>4</td>
                                         <td>5</td>
                                          <td>6</td>
                                           
                                            
                                      
                                 </tr>                                
                                </thead>
                                <tbody>
                                <?php $i =1; ?>
                                <?php $a =1; ?>
                          
                            <?php foreach ($kandang_a as $row ): ?>
                                <td ><?=$i; ?></td>
                                 <td ><?=$a; ?></td>
                                <td><?= date ('d F Y', strtotime ($row["tanggal"])); ?></td>
                                <td><?= $row["afkir"]; ?> ekor</td>
                                <td><?= $row["mati"]; ?> ekor</td>
                                <td><?= $row["pakan_total"]; ?> kg</td>
                                <td><?= $row["sisa_1"]; ?> kg</td>
                                <td><?= $row["sisa_2"]; ?> kg</td>
                                <td><?= $row["sisa_3"]; ?> kg</td>
                                <td><?= $row["sisa_4"]; ?> kg</td>
                                <td><?= $row["sisa_5"]; ?> kg</td>
                                <td><?= $row["sisa_6"]; ?> kg</td>
                                <td>Total</td>
                                <td><?= $row["jumlah_telur"]; ?> Butir </td>
                                <td><?= $row["berat_telur"]; ?> kg</td>
                                <td><?= $row["suhu_pagi"]; ?>℃</td>
                                <td><?= $row["suhu_siang"]; ?>℃</td>
                                <td><?= $row["suhu_sore"]; ?>℃</td>
                                
                                </tr>
                                <?php $i ++; ?>
                                  <?php $a ++; ?>
                            <?php endforeach; ?>

                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- </div> -->

<?php
    include 'komponen/closing-pages.php';
?>