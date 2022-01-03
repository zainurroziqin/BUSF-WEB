<?php

    include 'komponen/starting-pages.php';
    include 'komponen/sidebar.php';
    include 'komponen/navbar.php';
    include '../configs/koneksi.php';
?>
<?php 
$kandang_b= query("SELECT * FROM kandang_b")
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
                                <h5 class="m-b-10">Kandang B</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Kandang B</a></li>
                                
                                <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h5>Kandang A</h5> -->
                        <a href="TkandangB.php">
                          <button type="button" class="btn btn-warning" ><i class="feather mr-2 icon-plus"></i>Tambah Data Baru</button>
                          </a>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                        <th>Diisi Oleh</th>
                                        <th>Keterangan</th>
                                        <th>Opsi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php $i =1; ?>
                          
                            <?php foreach ($kandang_b as $row ): ?>
                                <td><?=$i; ?></td>
                                <td><?= date ('d F Y', strtotime ($row["tanggal"])); ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["keterangan"]; ?></td>
                                <td>
                                    <a href="EkandangB.php?id=<?=$row["id"]; ?> " type="button" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                     Detail</a>  
                                    <a href="HapuskandangB.php?id=<?=$row["id"]; ?>"  type="button" class="btn btn-danger btn-sm tombol-hapus"onclick="return confirm('yakin?');">
                                     <i class="fas fa-trash"></i> Hapus</a>
                                </td>
                                </tr>
                                <?php $i ++; ?>
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