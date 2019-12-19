<?php
require_once "connectdb.php";
session_start();

$username = $password = '';

$username = data_input($_POST["username"]);
$password = $_POST["password"];


function data_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$query = mysqli_query($connnectdb, "select * from user where user_Name = '$username' and user_Password = '$password'");
$row = mysqli_fetch_array($query);
if($row['user_Name'] == $username && $row['user_Password'] == $password) {
	$_SESSION["IDLOGIN"] = $row['kd_User'];

	?>
		<script language="Javascript">
			document.location = 'mainpage.php'
		</script>
		<?php
    exit;
} else {
    ?>
		<script language="Javascript">
			alert('login anda Gagal, Silahkan Login Ulang'); //muncul alert box ketika Login telah Sukses
			document.location = 'Login.html';
		</script>
		<?php
}
