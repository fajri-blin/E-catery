<?php
require "connectdb.php";
session_start();

$sql = "SELECT * FROM catering";
$result = mysqli_query($connnectdb, $sql);
$row = mysqli_fetch_array($result);

if($_SESSION["IDLOGIN"] == $row['kd_User']){
    ?>
    <script language="Javascript">
    alert("Login akun catering berhasil");
    document.location="dashcat.php";
    </script>
    <?php
    $_SESSION["IDLOGINCAT"] = $row['kd_Catering'];
} else {
    ?>
    <script language="Javascript">
    alert("Belum buat Akun Catering, Silahkan buat akun Catering");
    document.location="createcat_view.php";
    </script>
    <?php
}

