<?php
require("../koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $GetTableGT = mysqli_query($konek, "SELECT MAX(id) AS IDAuto FROM kandang_c");
    $GetKodeGT = mysqli_fetch_array($GetTableGT);
    $GetMaxValue = $GetKodeGT['IDAuto'];

    $GetMaxValue++;

    $id = $GetMaxValue;
    $tanggal = $_POST["tanggal"];
    $pakan_total = $_POST["pakan_total"];
    $sisa_1 = $_POST["sisa_1"];
    $sisa_2 = $_POST["sisa_2"];
    $sisa_3 = $_POST["sisa_3"];
    $sisa_4 = $_POST["sisa_4"];
    $sisa_5 = $_POST["sisa_5"];
    $sisa_6 = $_POST["sisa_6"];
    $jumlah_telur = $_POST["jumlah_telur"];
    $berat_telur = $_POST["berat_telur"];
    $mati= $_POST["mati"];
    $afkir= $_POST["afkir"];
    $suhu_pagi= $_POST["suhu_pagi"];
    $suhu_siang= $_POST["suhu_siang"];
    $suhu_sore= $_POST["suhu_sore"];
    $nama = $_POST["nama"];
    $keterangan = "Belum Dikonfirmasi";

    $ayam = mysqli_query($konek, "SELECT * FROM ayam WHERE namaKandang = 'kandang_c'");

    while($Data = mysqli_fetch_array($ayam)){
        $jumlahAyam =  $Data['JumlahAyam'];
    }
       
    $totalAyam = $jumlahAyam - $mati - $afkir;

    $queryAyam = "UPDATE ayam SET JumlahAyam= $totalAyam WHERE namaKandang = 'kandang_c'";


    mysqli_query($konek,$queryAyam);

    $query = "INSERT INTO kandang_c(id, tanggal, pakan_total, sisa_1, sisa_2, sisa_3, sisa_4, sisa_5, sisa_6, jumlah_telur, berat_telur, mati, afkir, suhu_pagi, suhu_siang, suhu_sore, nama, keterangan) VALUES ('$id','$tanggal','$pakan_total','$sisa_1','$sisa_2','$sisa_3','$sisa_4','$sisa_5','$sisa_6','$jumlah_telur','$berat_telur','$mati','$afkir','$suhu_pagi','$suhu_siang','$suhu_sore','$nama','$keterangan')";
    $eksekusi = mysqli_query($konek,$query);
    $cek = mysqli_affected_rows($konek);

    if($cek > 0){
        $response["kode"] = 1;
        $response["pesan"] = "Berhasil";
    }else{
        $response["kode"] = 0;
        $response["pesan"] = "Gagal";
    }
}else{
    $response["kode"] = 0;
    $response["pesan"] = "Tidak Ada Post Data";
}

echo json_encode($response);
mysqli_close($konek);
?>