<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        include 'koneksi.php';

        $username = $_GET['username'];
        $password = $_GET['password'];

        $query_check = "select * from user where username = '$username'";
        $check = mysqli_fetch_array(mysqli_query($konek, $query_check)); 
        $json_array = array();
        $response = array();
        
        if (isset($check)) {
            // $query_check_pass = "select * from user where username = '$username' and password = '$password'";
            // $query_pass_result = mysqli_query($konek, $query_check_pass);
            // $check_password = mysqli_fetch_array($query_pass_result);
            // if (isset($check_password)) {
            if (password_verify($password, $check["password"])) {
                $query_pass_result = mysqli_query($konek, $query_check);
                // while ($row = mysqli_fetch_array($query_pass_result)) {
                    // $json_array[] = $row;
                    
                // }                
                // $response = array(
                //     'code' => 200,
                //     'status' => 'Sukses',
                //     'user_list' => $json_array
                // );

                $response["code"] = 200;
                $response["status"] = "Sukses";
                $response["user_list"] = array();

                $folder = "img/";

                while($ambil = mysqli_fetch_object($query_pass_result)){
                    $F['nama'] = $ambil->nama;
                    $F['gambar'] = $folder.$ambil->gambar;
                    $F['username'] = $ambil->username;
                    $F['password'] = $ambil->password;
                    $F['role'] = $ambil->role;
                    $F['telp'] = $ambil->telp;
                    $F['tanggal_dibuat'] = $ambil->tanggal_dibuat;
            
                   array_push($response["user_list"],$F);
                }
            } else {
                $response = array(
                    'code' => 401,
                    'status' => 'Password salah, periksa kembali!',
                    // 'user_list' => $json_array
                );    
            }
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Data tidak ditemukan, lanjutkan registrasi?',
                // 'user_list' => $json_array
            );
        }
        print(json_encode($response));
        mysqli_close($konek);
    }
?>