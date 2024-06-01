<?php 
    include '../komponen/starting-pages.php';
    include '../komponen/sidebar.php';
    include '../komponen/navbar.php';
    require '../../configs/koneksi.php';
    include '../proses/proses-pengguna.php';

  // ambil data di url
$id = $_GET["id"];
// query data user berdasarkan id
$user = query("SELECT * FROM user WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){


// cek apakah data berhasil diubah atau tidak
if (ubah ($_POST) > 0 ) {
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
                                <h5 class="m-b-10">Detail Data Pengguna</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="Pengguna.php">Pengguna</a></li>
                                <li class="breadcrumb-item"><a href="">Detail Data Pengguna</a></li>
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
                                <h1 class="h4 text-gray-900 mb-4">Detail Informasi Pengguna</h1>
                            </div>
                           
                            
                                <form action="" method="POST">
                                    <div class="form-group row">
                                    	 <input type="hidden" name="id" value="<?=$user ["id"];?>" >
                                        <label for="nama" class="col-sm-3 col-form-label" >Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama" id="nama" value="<?=$user ["nama"];?>"
                                            >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?=$user ["alamat"];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="role" class="col-sm-3 col-form-label">Role</label>
                                        <div class="col-sm-9">
                                          <select class="custom-select my-1 mr-sm-2" id="role" name="role" >  
                                                    
                                                <option value="Administrator" <?php if ($user['role'] == 'Administrator') {echo "selected";} ?> >Administrator</option>
                                                <option value="Anak Kandang" <?php if ($user['role'] == 'Anak Kandang') {echo "selected";} ?> >Anak Kandang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telp" class="col-sm-3 col-form-label">Telepon/HP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="telp" id="telp" value="<?=$user ["telp"];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" id="username" value="<?=$user ["username"];?>">
                                        </div>
                                    </div>
                                   
                                    <div class="mb-3">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                                        <a href="Pengguna.php">
                                    <button type="button"  class="btn btn-danger"><i class="fas fa-fw fa-sign-out-alt"></i><b>Back</b></button>
                                    </a>

                                    </div>


                                </form>

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
    include '../komponen/closing-pages.php';
?>