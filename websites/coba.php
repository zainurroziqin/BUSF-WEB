<?php 

include '../configs/koneksi.php';
// include '../configs/autoCode.php';

$GetMin = mysqli_query($conn, "SELECT * FROM kandang_a");
$jumlahData = mysqli_num_rows($GetMin);

$angka = array();
$s = 1;

$dataMinggu = array();
$dataHenday = array();
$GetFCRM = array();
$FCR = array();

$ayam = mysqli_query($conn, "SELECT * FROM ayam WHERE namaKandang = 'kandang_a'");
// $jumlahayam = mysqli_fetch_array($ayam);

while($Data = mysqli_fetch_array($ayam)){
   $jumlahAyam =  $Data['JumlahAyam'];
}

// echo $jumlahAyam;

 // for ($i = 1; $i <= $jumlahData; $i++) {

     
 //     $s = $s + 7;
 //     $angka[] = $s;

 //     // for(j=1; $j<= $)
 //     // // $GetMinggu = mysqli_query($conn, "SELECT SUM(pakan_total) AS JumlahPakan, SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN '1' AND '7'");
     
 // }

 
 for ($i = 0; ; $i+=7) {
     if ($i > $jumlahData) {
         break;
     }
     $angka[] = $i;

 }

for($i = 1; $i<count($angka); $i++){

    $angka[$i-1] += 1;

    $dataHD[$i] = mysqli_query($conn, "SELECT SUM(jumlah_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
    $GetHD[$i] = mysqli_fetch_array($dataHD[$i]);
    $HenDay[$i] = $GetHD[$i]['JumlahBT']/$jumlahAyam * 100;

    $dataEM[$i] = mysqli_query($conn, "SELECT SUM(berat_telur) AS JumlahBT FROM kandang_a WHERE id BETWEEN ".$angka[$i-1]." AND ".$angka[$i]);
    $GetEM[$i] = mysqli_fetch_array($dataEM[$i]);
    $EggMas[$i] = $GetEM[$i]['JumlahBT']/$jumlahAyam * 1000;

        
}

for($i = 1; $i <= count($HenDay); $i++){
    echo round("$HenDay[$i]",2);
    if($i < (count($HenDay))){
        echo ", ";
    }
}

echo "<br>";

for($i = 1; $i <= count($EggMas); $i++){
    echo round("$EggMas[$i]",2);
    if($i < (count($EggMas))){
        echo ", ";
    }
}

    // $SetCharKodeGT = "PG";

    // echo "<br>";
    // GenerateIDKA();

    function GenerateIDKA()
    {
        global $conn;
        $GetTableGT = mysqli_query($conn, "SELECT MAX(id) AS IDAuto FROM kandang_a");
        $GetKodeGT = mysqli_fetch_array($GetTableGT);
        $GetMaxValue = $GetKodeGT['IDAuto'];

        $GetMaxValue++;

        $GenerateKodeGT = $GetMaxValue;
        echo $GenerateKodeGT;
        
    }

    GenerateIDKA();




                
?>


