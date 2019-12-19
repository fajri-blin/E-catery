<?php
require "connectdb.php";

// $kduser = $_POST['user_id']
// $username =
//  $useremail = $userpassword = "";

// $selectlastid = mysqli_query($connnectdb, "SELECT max(kd_User) AS lastIdUser FROM user ORDER BY kd_user DESC");
// $row_selecttlastid = mysqli_fetch_array($selectlastid);
// if($row_selecttlastid['lastIdUser'] == "") {
//     $no_u = 0;
//     $no_u++;
//     $kduser = "U-" . strval($no_u);
// } else {
//     $no_u = substr($row_selecttlastid['lastIdUser'], 2);
//     $no_u++;
//     $kduser = "U-" . strval($no_u);
// }
// session_start();
// $_SESSION['kodebaru'] = "$kduser";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $username = data_input($_POST["username"]);
// $useremail = data_input($_POST["useremail"]);
// $userpassword = $_POST["passwordfinal"];
// }

// if ($_POST["passwordfirst"] == $_POST["passwordfinal"]) {
//     ?>
//     <script  language="Javascript">
//     alert('Data Berhasil dimasukkan !');
//     window.location("signup.php");
//     </script>
//     <?php
//     } 
//     else {
//         ?>
//         <script  language="Javascript">
//         alert('Password must be same !');
//         window.location("signup.php");
//         </script>
//         <?php
//     } 

// if (isset($_POST['submit'])) {
//     $query = "INSERT INTO user (kd_User, user_Name, user_Email, user_Password) VALUES ('".$kduser."','".$username."','".$useremail."','". $userpassword ."')";

//     $hasil = mysqli_query($connnectdb, $query);
//     ?>
//     <script  language="Javascript">
//     alert("Data berhasil Masuk");
//     window.location="Login.html";
//     </script>
//     <?php
// }

// function data_input($data)
// {
//     $data = trim($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }



//var_dump($_POST);
$kduser = $_POST['user_id'];
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userpassword = $_POST['passwordfinal'];
if(isset($_POST)){

    $query = "INSERT INTO user (kd_User, user_Name, user_Email, user_Password) VALUES ('".$kduser."','".$username."','".$useremail."','". $userpassword ."')";

    $hasil = mysqli_query($connnectdb, $query);
    header('Location: login.html');
    echo "Data berhasil ditamah";
}