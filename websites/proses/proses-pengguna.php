<?php
    $user = query("SELECT * FROM user");

// hapus data User
function hapus ($id){
	global $conn;
	$SelectData = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
	$GetDataIMG = mysqli_fetch_array($SelectData);
	$RemoveIMG = unlink("../../assets/images/user/$GetDataIMG[gambar]");
	if ($RemoveIMG) {
			mysqli_query($conn,"DELETE FROM user WHERE id =$id");
	return mysqli_affected_rows($conn);
	}
}

// function ubah
function ubah($data){
    global $conn;
    $id = $data ["id"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $username = $data["username"];
    $role = $data["role"];
    $telp = $data["telp"];
    
    // query insert data
    $query = "UPDATE user SET
                nama = '$nama',
                alamat = '$alamat',
                username = '$username',
                role = '$role',
                telp = '$telp'
                WHERE id = $id
                ";
    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
    }
    
?>