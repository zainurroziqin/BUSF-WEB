<?php
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