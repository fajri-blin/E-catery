<?php
require "connectdb.php";
    session_start();
$selectlastid = mysqli_query($connnectdb, "SELECT max(kd_User) AS lastIdUser FROM user ORDER BY kd_user DESC");
$row_selecttlastid = mysqli_fetch_array($selectlastid);
if($row_selecttlastid['lastIdUser'] == "") {
    $no_u = 0;
    $no_u++;
    $kduser = "U-" . strval($no_u);
} else {
    $no_u = substr($row_selecttlastid['lastIdUser'], 2);
    $no_u++;
    $kduser = "U-" . strval($no_u);
}
$_SESSION['kodebaru'] = "$kduser";
    $newcode = $_SESSION['kodebaru'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <!-- FRAMEWORK BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- FORM SIGNUP -->

    <div class="container mt-5 pt-5">
        <section class="row justify-content-center">
            <div class="card col-md-7 shadow-lg bg-light rounded">
                <h3 class="card-header">SignUp</h3>
                <div class="card-body">
                    <form method="POST" action="signup.php">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="user_id" value="<?=$newcode?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                The box box filled !
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                The box box filled !
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="passwordfirst" placeholder="Password" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                The box box filled !
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="passwordfinal" placeholder="Re-type Password" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                The box box filled !
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="useremail" placeholder="email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                The box box filled !
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>

</html>