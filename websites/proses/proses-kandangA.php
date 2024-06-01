<?php

$kandang_a = query("SELECT * FROM kandang_a");

// function tambah data
function tambahdatakandangA($data) {
    global $conn;

    // Escape string untuk mencegah SQL Injection
    $tanggal = mysqli_real_escape_string($conn, $data['tanggal']);
    $pakan_total = mysqli_real_escape_string($conn, $data['pakan_total']);
    $sisa_1 = mysqli_real_escape_string($conn, $data['sisa_1']);
    $sisa_2 = mysqli_real_escape_string($conn, $data['sisa_2']);
    $sisa_3 = mysqli_real_escape_string($conn, $data['sisa_3']);
    $sisa_4 = mysqli_real_escape_string($conn, $data['sisa_4']);
    $sisa_5 = mysqli_real_escape_string($conn, $data['sisa_5']);
    $sisa_6 = mysqli_real_escape_string($conn, $data['sisa_6']);
    $jumlah_telur = mysqli_real_escape_string($conn, $data['jumlah_telur']);
    $berat_telur = mysqli_real_escape_string($conn, $data['berat_telur']);
    $suhu_pagi = mysqli_real_escape_string($conn, $data['suhu_pagi']);
    $suhu_siang = mysqli_real_escape_string($conn, $data['suhu_siang']);
    $suhu_sore = mysqli_real_escape_string($conn, $data['suhu_sore']);
    $mati = mysqli_real_escape_string($conn, $data['mati']);
    $afkir = mysqli_real_escape_string($conn, $data['afkir']);
    $keterangan = mysqli_real_escape_string($conn, $data['keterangan']);
    $nama = mysqli_real_escape_string($conn, $data['nama']);

    // Query untuk menambahkan data ke tabel kandang_a
    $query = "INSERT INTO kandang_a (tanggal, pakan_total, sisa_1, sisa_2, sisa_3, sisa_4, sisa_5, sisa_6, jumlah_telur, berat_telur, suhu_pagi, suhu_siang, suhu_sore, mati, afkir, keterangan, nama) 
                VALUES ('$tanggal', '$pakan_total', '$sisa_1', '$sisa_2', '$sisa_3', '$sisa_4', '$sisa_5', '$sisa_6', '$jumlah_telur', '$berat_telur', '$suhu_pagi', '$suhu_siang', '$suhu_sore', '$mati', '$afkir', '$keterangan', '$nama')";

    // Eksekusi query
    mysqli_query($conn, $query);

    // Mengembalikan jumlah baris yang terpengaruh oleh operasi query terakhir INSERT
    return mysqli_affected_rows($conn);
}



?>