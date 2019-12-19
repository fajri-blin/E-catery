<?php
require "connectdb.php";
session_start();

$idUser = $idCat = $userCatId = $catAdress = $catCall = "";

 
    $idUser = $_POST["idUser"];
    $catUser = $_POST["catUser"];
    $catAdress = $_POST["catAdress"];
    $catCall = $_POST["catCall"];

    $no_c = substr($idUser,2);
    $idCat = "C-" . strval($no_c);

    //insert untuk tabel cat
    $sqlcat ="INSERT INTO catering (kd_Catering, kd_User, catering_Name, catering_Address, catering_Call) VALUE ('".$idCat."','".$idUser."','".$catUser."','".$catAdress."','".$catCall."')";
    $resultuser = mysqli_query($connnectdb, $sqlcat);
    $_SESSION['IDLOGINCAT'] = $idCat;
    ?>
    <script language="javascript">
        alert("akun berhasil ditambahkan!");
        document.location="dashcat.php";
    </script>
    <?php
