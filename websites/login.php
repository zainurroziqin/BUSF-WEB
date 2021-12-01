<?php
session_start();
?>

<?php


if(isset($_SESSION["login"])){
	header ("Location: Dashboard.php");
}

 include '../configs/koneksi.php';

if (isset($_POST["submit"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query ($conn, "SELECT * FROM user WHERE username = '$username'");
	
 	
// cek username
	if (mysqli_num_rows($result) === 1) {

		// cek password

		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"]) ){
			$_SESSION["login"] = true;
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['nama'] = $row['nama'];

				echo "
		<script>
		alert ('selamat datang $username')
		document.location.href ='dashboard.php';
		</script>";
			exit;
		}
	}

	$error = true;

	
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<div class="login-box">
	<img src="logo.jpg" class="avatar">
<h1>Halaman Login</h1>
<?php if (isset($error) ) : ?>
	<p id="btn">username/password salah</p>
<?php endif; ?>
	<div class="flash-data1" data-flashdata1=""></div>
		<form action="#" method="POST">

			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Username" id="exampleinputusername" name="username" required autocomplete="off">
			</div>

			<div class="textbox">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Password" id="exampleinputpassword" name="password" required>

			</div>

			<button type="submit" name="submit"  class="btn">
				Login
			</button>

		</form>
	</div>

</div>

  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>

