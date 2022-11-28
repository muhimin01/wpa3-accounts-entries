<?php

require_once "config.php";

$email = $_POST['email'];
$uname = $_POST['uname'];
$pswd = $_POST['pswd'];

//check if email or username already exists
$select = mysqli_query($conn, "SELECT * FROM account WHERE Email = '$email'");
if(mysqli_num_rows($select)) {
    exit('This email is already registered to an account');
}

$select = mysqli_query($conn, "SELECT * FROM account WHERE Username = '$uname'");
if(mysqli_num_rows($select)) {
    exit('This username has already been taken');
}

//register function
$sql = "INSERT INTO account (Email,Username,Password) VALUES ('$email','$uname','$pswd')";
if($conn->query($sql)===TRUE) {
    echo "Successfully saved into the database";
    header('Location: ../html/registerRedirect.html');
}
else {
    echo "Error!";
    header('Location: ../../login.html');
}

?>