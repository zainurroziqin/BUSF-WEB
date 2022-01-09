<?php

    include 'komponen/starting-pages.php';
    include 'komponen/sidebar.php';
    include 'komponen/navbar.php';
    include '../configs/koneksi.php';
?>
<?php 
$kandang_d= query("SELECT * FROM kandang_d WHERE keterangan = 'Terkonfirmasi'");

$ayam = mysqli_query($conn, "SELECT * FROM ayam WHERE namaKandang = 'kandang_d'");

while($Data = mysqli_fetch_array($ayam)){
    $jumlahAyam =  $Data['JumlahAyam'];
    }
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
                                <h5 class="m-b-10">Kandang C</h5>
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
                    
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                           
                            <table id="tbl_exporttable_to_xls" class="table table-striped table-bordered nowrap">

                                <thead>
                                    <tr>
                            <td colspan = "21" align="center">    <h3 >LAPORAN DATA KANDANG D</h3></td>
                      
                       </tr>
                       <tr>
                       <td colspan ="21" align="center"><h3>BAROKAH UTAMA FARM</h3></td>
                       <tr>
                       <td colspan ="21" align="right"><h5>Jumlah Ayam : <?php echo $jumlahAyam ?></h5></td>
                       </tr>
                       </tr>
                                 <tr align="center">
                                     <td rowspan="3">Hari</td>                                     
                                       <td rowspan="3">Tanggal</td>
                                        <td colspan="2">Jumlah Ayam</td>                                   
                                           <td colspan="8" >Pemberian Pakan</td>
                                            <td colspan="2">Produksi Telur</td>
                                      <td colspan="3">Suhu Kandang</td>
                                      <td rowspan="3">Hen Day</td>
                                      <td rowspan="3">FCR</td>
                                      <td rowspan="3">FI</td>
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
                               
                          
                            <?php foreach ($kandang_d as $row ): ?>
                                
                                <?php
                                    $ade =  $row["sisa_1"]+$row["sisa_2"]+$row["sisa_3"]+$row["sisa_4"]+$row["sisa_5"]+$row["sisa_6"]; 
                                    $total = $ade/1000;
                                    ?>
                                
                                <td ><?=$i; ?></td>
                        
                                <td><?= date ('d F Y', strtotime ($row["tanggal"])); ?></td>
                                <td><?= $row["afkir"]; ?> Ekor</td>
                                <td><?= $row["mati"]; ?> Ekor</td>
                                <td><?= $row["pakan_total"]; ?> Kg</td>
                                <td><?= $row["sisa_1"]; ?> gr</td>
                                <td><?= $row["sisa_2"]; ?> gr</td>
                                <td><?= $row["sisa_3"]; ?> gr</td>
                                <td><?= $row["sisa_4"]; ?> gr</td>
                                <td><?= $row["sisa_5"]; ?> gr</td>
                                <td><?= $row["sisa_6"]; ?> gr</td>
                                <td><?php  echo round("$total",2); ?>Kg</td>
                                <td><?= $row["jumlah_telur"]; ?> Butir </td>
                                <td><?= $row["berat_telur"]; ?> Kg</td>
                                <td><?= $row["suhu_pagi"]; ?>℃</td>
                                <td><?= $row["suhu_siang"]; ?>℃</td>
                                <td><?= $row["suhu_sore"]; ?>℃</td>
                                <td><?php $henday = $row["jumlah_telur"]/$jumlahAyam * 100; echo round("$henday",2);?></td>
                                <td><?php $fcr =  ($row["pakan_total"] - $total)/$row["berat_telur"]; echo round("$fcr",2);?></td>
                                <td><?php $FI = ($row["pakan_total"] - $total) * 1000/$jumlahAyam; echo round("$FI", 2); ?></td>
                                
                                </tr>
                                <?php $i ++; ?>
                                
                            <?php endforeach; ?>

                                </tbody>
                              
                            </table>
                               
                        </div>
                    </div>
                    <div class="mt-2 mb-2 ml-3 ">
<button type="button"  class="btn btn-danger mr-4" onclick = "ExportToExcel('xlsx')"><i class="fas fa-edit" ></i> Export Excel</button>

                         </div>
                </div>
            </div>
        </div>
    </section>

<!-- </div> -->
<script src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
   function ExportToExcel(type, fn, dl) {
      var elt = document.getElementById('tbl_exporttable_to_xls');
      var wb = XLSX.utils.table_to_book(elt, {
         sheet: "sheet1",
         dateNF: 'dd-mm-yyyy'
      });
      return dl ?
      XLSX.write(wb, {
         bookType: type,
         bookSST: true,
         type: 'base64'
      }) :
      XLSX.writeFile(wb, fn || ('Report Data Kandang A.' + (type || 'xlsx')));
   }
</script>
<?php
    include 'komponen/closing-pages.php';
?>