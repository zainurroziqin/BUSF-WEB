<?php 
include 'komponen/starting-pages.php';
    include 'komponen/sidebar.php';
    include 'komponen/navbar.php';
  include '../configs/koneksi.php';

  // cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

// cek apakah data berhasil ditambahkan atau tidak
if (tambah ($_POST) > 0 ) {
	// menggunakan javascript
	echo "
        <script>
            setTimeout(function() { 
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data Berhasil Ditambahkan',
                    icon: 'success',
                });
            },10);
            window.setTimeout(function(){ 
                window.location.replace('pengguna');
            },1800);
        </script>
    ";
} else {
    echo "
        <script>
            setTimeout(function() { 
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Data Gagal',
                    icon: 'gagal',
                });
            },10);
            window.setTimeout(function(){ 
                window.location.replace('pengguna');
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
                                <h5 class="m-b-10">Tambah Data Pengguna</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="Pengguna.php">Pengguna</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="card-header">  
                        <!-- <h5>Kandang A</h5> -->
                        <div class="card col-md-7 mx-auto p-5">
                    <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat akun</h1>
                            </div>
                            <form  class= "user"method="POST" action="" autocomplete="off">
                        <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user"  placeholder="Masukkan Nama..." name="tanggal_dibuat" required  value="<?php echo date("Y-m-d"); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan Nama..." name="nama" required >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Masukkan Alamat..." name="alamat" required >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan no telp/HP" name="telp"  required >
                                </div>
                                <div class="form-group">
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="role"  required>
                                        <option selected="">Masukkan Tipe Pengguna...</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Anak Kandang">Anak Kandang</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan Username..." name="username" required >
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"  placeholder="Masukkan Password..." name="password"  required >
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                    Buat Akun
                                </button>

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