<?php
require "connectdb.php";

$kduser = $username = $email = $password = "";

if($_POST['passwordfirst'] != $_POST['passwordfinal']){
    ?>
    <script language="javascript">
        alert("Password tidak cocok");
        document.location="signunold.php";
    </script>
    <?php
} else{

 
    $username = $_POST["username"];
    $email = $_POST["useremail"];
    $password = $_POST["passwordfinal"];

    //memuat kduser pada tabel user
    $selectlastiduser = mysqli_query($connnectdb, "SELECT max(kd_User) AS lastIdUser FROM user ORDER BY kd_user DESC");
    $row_selecttlastiduser = mysqli_fetch_array($selectlastiduser);
    if($row_selecttlastiduser['lastIdUser'] == "") {
    $no_u = 0;
    $no_u++;
    $kduser = "U-" . strval($no_u);
    } else {
    $no_u = substr($row_selecttlastiduser['lastIdUser'], 2);
    $no_u++;
    $kduser = "U-" . strval($no_u);
    }

    //insert untuk tabel user
    $sqluser ="INSERT INTO user (kd_User, user_Name, user_Email, user_Password) VALUE ('".$kduser."','".$username."','".$email."','".$password."')";
    $resultuser = mysqli_query($connnectdb, $sqluser);

    ?>
    <script language="javascript">
        alert("akun berhasil ditambahkan!");
        document.location="login_view.php";
    </script>
    <?php
}