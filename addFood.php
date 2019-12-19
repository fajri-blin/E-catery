<?php
require "connectdb.php";
session_start();

$idCat = $idFood = $foodName = $foodDesc = $foodPrice = $foodImage = "";


    $selectlastidfood = mysqli_query($connnectdb, "SELECT max(kd_Food) AS lastIdFood FROM food ORDER BY kd_food DESC");
    $row_selecttlastidfood = mysqli_fetch_array($selectlastidfood);
    if($row_selecttlastidfood['lastIdFood'] == "") {
    $no_f = 0;
    $no_f++;
    $idFood = "F-" . strval($no_f);
    } else {
    $no_f = substr($row_selecttlastidfood['lastIdFood'], 2);
    $no_f++;
    $idFood = "F-" . strval($no_f);
    }


    $idCat = $_SESSION["IDLOGINCAT"];
    $foodName = $_POST["foodName"];
    $foodDesc = $_POST["foodDesc"];
    $foodPrice = $_POST["foodPrice"];
    if(!isset($_POST["foodImage"])){
        $foodImage = "image/f1.JPG";
    }else{
    $foodImage = $_POST["foodImage"];
    }

    //insert untuk tabel food
    $sqlfood ="INSERT INTO food (kd_Food, kd_Catering, food_Name, food_Description, food_Price, food_Image) VALUE ('".$idFood."','".$idCat."','".$foodName."','".$foodDesc."','".$foodPrice."','".$foodImage."')";
    $resultuser = mysqli_query($connnectdb, $sqlfood);
    ?>
    <script language="javascript">
        alert("list makanan berhasil ditambahkan!");
        document.location="dashcat.php";
    </script>
    <?php
