<?php 
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';
include '../configs/koneksi.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
    $alamat = mysqli_real_escape_string($conn, $_POST["alamat"]);
    $username = mysqli_real_escape_string($conn, stripslashes($_POST["username"]));
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $role = mysqli_real_escape_string($conn, $_POST["role"]);
    $telp = mysqli_real_escape_string($conn, $_POST["telp"]);
    $tanggal_dibuat = mysqli_real_escape_string($conn, $_POST["tanggal_dibuat"]);

    // Input File
    $ChooseGambar = strtolower($_FILES['gambar']['name']);
    $Patch = $_FILES['gambar']['tmp_name'];
    $CheckInput = $_FILES['gambar']['error'];
    $CheckSize = $_FILES['gambar']['size'];
    
    $MoveTO = "../assets/images/user/";
    $ValidExt = ["jpg", "jpeg", "png"];
    $GetNameFile = explode(".", $ChooseGambar);
    $GetExt = end($GetNameFile);
    $GetKodeBIO = uniqid();
    $SetUniqName = $GetKodeBIO . "-" . $ChooseGambar;

    // Validasi ekstensi file
    if (!in_array($GetExt, $ValidExt)) {
        echo "
            <script>
                setTimeout(function() { 
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Ekstensi file tidak valid',
                        icon: 'error',
                    });
                }, 10);
                window.setTimeout(function(){ 
                    window.location.replace('Tpengguna');
                }, 2500);
            </script>
        ";
        exit;
    }

    // Validasi ukuran file (misal max 2MB)
    if ($CheckSize > 2000000) {
        echo "
            <script>
                setTimeout(function() { 
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Ukuran file terlalu besar',
                        icon: 'error',
                    });
                }, 10);
                window.setTimeout(function(){ 
                    window.location.replace('Tpengguna');
                }, 2500);
            </script>
        ";
        exit;
    }

    if ($password != $confirmPassword) {
        echo "
            <script>
                setTimeout(function() { 
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Password tidak sama',
                        icon: 'error',
                    });
                }, 10);
                window.setTimeout(function(){ 
                    window.location.replace('Tpengguna');
                }, 2500);
            </script>
        ";
    } else {
        // Enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Pindahkan file setelah validasi
        if (move_uploaded_file($Patch, $MoveTO . $SetUniqName)) {
            // Query insert data
            $query = "INSERT INTO user (nama, gambar, alamat, username, password, role, telp, tanggal_dibuat)
                      VALUES ('$nama', '$SetUniqName', '$alamat', '$username', '$password', '$role', '$telp', '$tanggal_dibuat')";

            if (mysqli_query($conn, $query)) {
                echo "
                    <script>
                        setTimeout(function() { 
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data Berhasil Ditambahkan',
                                icon: 'success',
                            });
                        }, 10);
                        window.setTimeout(function(){ 
                            window.location.replace('Pengguna');
                        }, 1800);
                    </script>
                ";
            } else {
                echo "
                    <script>
                        setTimeout(function() { 
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal ditambahkan: " . mysqli_error($conn) . "',
                                icon: 'error',
                            });
                        }, 10);
                        window.setTimeout(function(){ 
                            window.location.replace('Tpengguna');
                        }, 2500);
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    setTimeout(function() { 
                        Swal.fire({
                            title: 'Gagal!',
                            text: 'Gagal mengupload gambar',
                            icon: 'error',
                        });
                    }, 10);
                    window.setTimeout(function(){ 
                        window.location.replace('Tpengguna');
                    }, 2500);
                </script>
            ";
        }
    }
}
?>
<section class="pcoded-main-container">
    <div class="pcoded-content">
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
                            <li class="breadcrumb-item"><a href="">Tambah Data Pengguna</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">  
            <div class="card col-md-7 mx-auto p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Buat akun</h1>
                </div>
                <form class="user" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control form-control-user" name="tanggal_dibuat" value="<?php echo date("Y-m-d"); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Masukkan Nama..." name="nama" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Masukkan Alamat..." name="alamat" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Masukkan no telp/HP" name="telp" required>
                    </div>
                    <div class="form-group">
                        <select class="custom-select my-1 mr-sm-2" name="role" required>
                            <option value="" selected disabled>Masukkan Tipe Pengguna...</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Anak Kandang">Anak Kandang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Masukkan Username..." name="username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" placeholder="Masukkan Password..." name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" placeholder="Konfirmasi Password" name="confirmPassword" required>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" name="gambar" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                        Buat Akun
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="dt-responsive table-responsive">
            </div>
        </div>
    </div>
</section>

<?php
include 'komponen/closing-pages.php';
?>