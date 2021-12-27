<?php
require("koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama= $_POST["nama"];

    $query = "SELECT * FROM user WHERE nama = '$nama'";
    $eksekusi = mysqli_query($konek,$query);
    $cek = mysqli_affected_rows($konek);

    if($cek > 0){
        $response["code"] = 200;
        $response["status"] = "Berhasil";
        $response["user_list"] = array();

        // $folder = "http://192.168.0.110/BarokahUtama/img/";
        while($ambil = mysqli_fetch_object($eksekusi)){
            $F['id'] = $ambil->id;
            $F['nama'] = $ambil->nama;
            $F['gambar'] = $ambil->gambar;
            $F['username'] = $ambil->username;
            $F['password'] = $ambil->password;
            $F['role'] = $ambil->role;
            $F['telp'] = $ambil->telp;
            $F['tanggal_dibuat'] = $ambil->tanggal_dibuat;
    
           array_push($response["user_list"],$F);
        }
    }else{
        $response["code"] = 0;
        $response["status"] = "Gagal";
    }
}else{
    $response["code"] = 0;
    $response["pesan"] = "Tidak Ada Post Data";
}

echo json_encode($response);
mysqli_close($konek);
?>