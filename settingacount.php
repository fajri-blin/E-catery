<?php
session_start();
require "connectdb.php";

$IDLOGIN = $_SESSION["IDLOGIN"]; 
$username = $_POST["username"];
$email = $_POST["useremail"];

//insert untuk tabel user
$sqlupdate ="UPDATE user SET user_Name = '$username', user_Email = '$email' WHERE kd_User = '$IDLOGIN'";
$resultupdate = mysqli_query($connnectdb, $sqlupdate);

?>
<script language="javascript">
    alert("akun berhasil diubah!");
    document.location="mainpage.php";
</script>
