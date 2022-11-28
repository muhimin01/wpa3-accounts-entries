<?php
require_once "config.php";
session_start();

$id = $_SESSION['ID'];
$email = $_POST["email"];
$uname = $_POST["uname"];
$pswd = $_POST["pswd"];

$sql = "UPDATE account SET Email='$email', Username='$uname', Password='$pswd' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Records updated <br>";
    echo "Account ID    : " . $id . "<br>";
    echo "New Email     : " . $email . "<br>";
    echo "New Username  : " . $uname . "<br>";
    echo "New Password  : " . $pswd . "<br>";
    
    $sql = "SELECT * FROM account WHERE ID = '$id'";
    $resultSet = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resultSet);

    $_SESSION['ID'] = $row["ID"];
    $_SESSION['Email'] = $row["Email"];
    $_SESSION['Username'] = $row["Username"];
    $_SESSION['Password'] = $row["Password"];

    echo "Session Verification <br>";
    echo "Account ID    : " . $id . "<br>";
    echo "New Email     : " . $email . "<br>";
    echo "New Username  : " . $uname . "<br>";
    echo "New Password  : " . $pswd . "<br>";

    header('Location: ../html/updateRedirect.html') ;
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>