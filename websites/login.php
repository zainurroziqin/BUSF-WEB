<?php
session_start();
require 'komponen/starting-pages.php';
require '../configs/koneksi.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['gambar'] = $row['gambar'];

            if ($row["role"] == "Administrator") {
                echo "<script>
                    setTimeout(function() { 
                        Swal.fire({
                            title: 'Berhasil Login!',
                            text: 'Selamat Datang $username',
                            icon: 'success'
                        });
                    }, 10);
                    window.setTimeout(function() { 
                        window.location.replace('dashboard'); // Redirect to dashboard
                    }, 2500);
                </script>";
            } else {
                echo "<script>
                    setTimeout(function() { 
                        Swal.fire({
                            title: 'Gagal Login!',
                            text: 'Anda bukan Admin',
                            icon: 'error'
                        });
                    }, 10);
                    window.setTimeout(function() { 
                        window.location.replace('Login.php'); // Stay on login page
                    }, 3000);
                </script>";
            }
        } else {
            echo "<script>
                setTimeout(function() { 
                    Swal.fire({
                        title: 'Gagal Login!',
                        text: 'Password salah',
                        icon: 'error'
                    });
                }, 10);
                window.setTimeout(function() { 
                    window.location.replace('Login.php'); // Stay on login page
                }, 3000);
            </script>";
        }
    } else {
        echo "<script>
            setTimeout(function() { 
                Swal.fire({
                    title: 'Gagal Login!',
                    text: 'Username tidak ada',
                    icon: 'error'
                });
            }, 10);
            window.setTimeout(function() { 
                window.location.replace('Login.php'); // Stay on login page
            }, 3000);
        </script>";
    }
}
?>

<div class="auth-wrapper align-items-stretch aut-bg-img">
    <div class="flex-grow-1">
        <div class="h-100 d-md-flex align-items-center auth-side-img">
            <div class="col-sm-10 auth-content w-auto">
                <h1 class="text-white my-4">Selamat Datang!</h1>
                <h4 class="text-white font-weight-normal">Silahkan masukkan akun anda untuk masuk ke dalam Websites.<br/>Terima kasih telah menggunakan jasa kami</h4>
            </div>
        </div>
        <div class="auth-side-form">
            <div class="auth-content">
                <form action="" method="POST"> <!-- No action attribute specified to submit to the same page -->
                    <h3 class="mb-4 f-w-400">Hello !</h3>
                    <div class="form-group mb-3">
                        <label class="floating-label">Username</label>
                        <input type="text" class="form-control" name="username" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <label class="floating-label" for="Password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-block btn-primary mb-4" name="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'komponen/closing-pages.php' ?>
