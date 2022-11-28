<?php
require_once "assets/php/config.php";
//require_once "assets/php/sessionCheck.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>WPA3 | Account</title>
    <link rel="icon" href="assets/images/msuicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/modal.css">
</head>

<body>
    <div class="card">
        <h1 style="text-align: center;">
            Web Programming A3
        </h1>
    </div>

    <div class="topnav">
        <a href="main.html">Home</a>
        <a href="#0" class="active">Account</a>
        <a href="entries.php">Entries</a>
        <a href="assets/php/logout.php" style="float:right" role="button">Logout</a>
    </div>

    <div class="container">
        <div class="card">
            <h2 style="text-align: center;">My Account</h2>
        </div>

        <div class="card">
            <?php
            echo "Account ID    : " . $_SESSION['ID'] . "<br>";
            echo "Username      : " . $_SESSION['Username'] . "<br>";
            echo "Email Address : " . $_SESSION['Email'] . "<br>";
            echo "Password      : " . $_SESSION['Password'] . "<br>";
            ?>

            <div class="center">
                <button type="button" class="bigredBtn" style="background-color: #04AA6D;" onclick="location.href='updateForm.php'">Edit Account</button>
                <button type="button" class="bigredBtn" onclick="document.getElementById('delWarning').style.display='block'">Delete Account</button>
            </div>

            <div id="delWarning" class="modal">
                <form class="modal-content animate" action="assets/php/delete.php">
                    <div class="container">
                        
                        <h2 style="text-align:center; color:black;">Are you sure you want to delete your account?</h2>
                        <p style="text-align:center; color:red;"> You will not be able to recover this account and you
                            will be redirected to the login page.</p>
                    </div>

                    <div class="modal-container" style="background-color:#f1f1f1">
                        <div class="center">
                            <button type="submit">Delete Account</button>
                            <button type="button" onclick="document.getElementById('delWarning').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>