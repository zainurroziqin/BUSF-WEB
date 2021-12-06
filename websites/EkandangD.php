<?php

    include 'komponen/starting-pages.php';
    include 'komponen/sidebar.php';
    include 'komponen/navbar.php';
    include '../configs/koneksi.php';
// ambil data di URL
$id = $_GET["id"];

// query data kandang A berdasarkan id
$kda = query("SELECT * FROM kandang_d WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

// cek apakah data berhasil ditambahkan atau tidak
if (ubahd ($_POST) > 0 ) {
    // menggunakan javascript
    echo "
        <script>
            setTimeout(function() { 
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data Berhasil Diedit',
                    icon: 'success',
                });
            },10);
            window.setTimeout(function(){ 
                window.location.replace('KandangD');
            },1800);
        </script>
    ";
} else {
    echo "
        <script>
            setTimeout(function() { 
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Data Gagal Diedit',
                    icon: 'gagal',
                });
            },10);
            window.setTimeout(function(){ 
                window.location.replace('KandangD');
            },2500);
        </script>
    ";
}


$tanggal = date("Ymd");
}
?>
 <section class="pcoded-main-container">

        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Detail Kandang D</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="KandangA.php">Kandang D</a></li>
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
                        <div class="p-4">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Detail Kandang D</h1>
                    </div>
                </div>
                                    <form action=" " method="POST">
                        <div class="row">

                            <div class="mx-auto">
                                <div class="mb-3">
                                    <input type="hidden" name="id" value="<?= $kda["id"];?>">

                                  
                                <input type="hidden" class="form-control form-control-user"  placeholder="Masukkan Nama..." name="tanggal" required  value="<?php echo date("Y-m-d"); ?>">

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">



                            <div class="col">
                                <h3>Pakan <i class="fas fa-utensils"></i></h3>
                                <div class="mb-3">

                                    <label for="pakan_total" class="form-label">Total Pakan</label>
                                    <input type="text" class="form-control" id="rupiah" aria-describedby="emailHelp" placeholder="Total pakan (kg).." name="pakan_total" value="<?= $kda["pakan_total"]; ?>" required="">

                                </div>
                                <div class="mb-3">
                                    <label for="sisa_1" class="form-label">Sisa Pakan Baris 1</label>
                                    <input type="number" class="form-control" id="sisa_1" placeholder="Sisa pakan baris 1" name="sisa_1" value="<?= $kda["sisa_1"]; ?>" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="sisa_2" class="form-label">Sisa Pakan Baris 2</label>
                                    <input type="number" class="form-control" id="sisa_2" placeholder="Sisa pakan baris 2" name="sisa_2" value="<?= $kda["sisa_2"]; ?>" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="sisa_3" class="form-label">Sisa Pakan Baris 3</label>
                                    <input type="number" class="form-control" id="sisa_3" placeholder="Sisa pakan baris 3" name="sisa_3" value="<?= $kda["sisa_3"]; ?>" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="sisa_4" class="form-label">Sisa Pakan Baris 4</label>
                                    <input type="number" class="form-control" id="sisa_4" placeholder="Sisa pakan baris 4" name="sisa_4" value="<?= $kda["sisa_4"]; ?>" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="sisa_5" class="form-label">Sisa Pakan Baris 5</label>
                                    <input type="number" class="form-control" id="sisa_5" placeholder="Sisa pakan baris 5" name="sisa_5" value="<?= $kda["sisa_5"]; ?>" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="sisa_6" class="form-label">Sisa Pakan Baris 6</label>
                                    <input type="number" class="form-control" id="sisa_6" placeholder="Sisa pakan baris 6" name="sisa_6" value="<?= $kda["sisa_6"]; ?>" required="">
                                </div>
                            </div>

                            <div class="col">
                                <h3>Telur <i class="fas fa-egg"></i></h3>
                                <div class="mb-3">
                                    <label for="jumlah_telur" class="form-label">Jumlah Telur</label>
                                    <input type="number" class="form-control" id="jumlah_telur" placeholder="Jumlah telur" name="jumlah_telur" value="<?= $kda["jumlah_telur"]; ?>" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="berat_telur" class="form-label">Berat Telur</label>
                                    <input type="text" class="form-control" id="berat_telur" placeholder="Berat telur (kg)" name="berat_telur" value="<?= $kda["berat_telur"]; ?>" required="">
                                </div>


                            </div>

                            <div class="col">
                                <h3>Suhu <i class="fas fa-temperature-high"></i></h3>
                                <div class="mb-3">
                                    <label for="suhu_pagi" class="form-label">Suhu Pagi</label>
                                    <input type="text" class="form-control" id="suhu_pagi" placeholder="Suhu pagi hari" name="suhu_pagi" value="<?= $kda["suhu_pagi"]; ?>" required="" maxlength="5">
                                </div>
                                <div class="mb-3">
                                    <label for="suhu_siang" class="form-label">Suhu Siang</label>
                                    <input type="text" class="form-control" id="suhu_siang" placeholder="Suhu siang hari" name="suhu_siang" value="<?= $kda["suhu_siang"]; ?>" required="" maxlength="5">
                                </div>
                                <div class="mb-3">
                                    <label for="suhu_sore" class="form-label">Suhu Sore</label>
                                    <input type="text" class="form-control" id="suhu_sore" placeholder="Suhu sore hari" name="suhu_sore" value="<?= $kda["suhu_sore"]; ?>" required="" maxlength="5">


                                </div>
                                <div class="mb-3">



                                </div>
                            </div>

                            <div class="col">
                                <h3>Ayam <i class="fas fa-kiwi-bird"></i></h3>
                                <div class="mb-3">
                                    <label for="mati" class="form-label">Jumlah Ayam Mati</label>
                                    <input type="number" class="form-control" id="mati" placeholder="Jumlah ayam mati" name="mati" value="<?= $kda["mati"]; ?>" required="" min="0">
                                </div>
                                <div class="mb-3">
                                    <label for="mati" class="form-label">Jumlah Ayam Afkir</label>
                                    <input type="number" class="form-control" id="mati" placeholder="Jumlah ayam afkir" name="afkir" value="<?= $kda["mati"]; ?>" required="" min="0">
                                </div>
                                <br><br><br><br><br><br><br><br>
                                <div class="mb-3">
                                    <label for="" class="form-label">Diisi Oleh</label>
                                    <input type="text" class="form-control"  name="nama" value="<?= $kda["nama"]?>" readonly="">
                                    <br>

                                    <div class="mb-3">
                              <div class="form-group">
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="keterangan"  required>
                                        <option value="Terkonfirmasi" <?php if ($kda['keterangan'] == 'Terkonfirmasi') {echo "selected";} ?>>Terkonfirmasi</option>
                                        <option value="Belum Dikonfirmasi" <?php if ($kda['keterangan'] == 'Belum Dikonfirmasi') {echo "selected";} ?>>Belum Dikonfirmasi</option>

                                    </select>
                                </div>

                                    </div>


                                    <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-edit"> Edit</i></button>


                                </div>
                            </div>




                        </div>
                    </form>
                

            </div>

        </div>                 
               
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                           
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