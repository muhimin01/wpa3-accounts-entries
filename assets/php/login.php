<?php
require_once "config.php";

$uname = $_POST['uname'];
$pswd = $_POST['pswd'];

//login function
$sql = "SELECT ID FROM account WHERE Username = '$uname' AND Password = '$pswd'";
$resultSet = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultSet);
$count = mysqli_num_rows($resultSet);

if ($count == 1) {
   session_start();

   $sql = "SELECT * FROM account WHERE Username = '$uname' AND Password = '$pswd'";
   $resultSet = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($resultSet);

   $_SESSION['ID'] = $row["ID"];
   $_SESSION['Email'] = $row["Email"];
   $_SESSION['Username'] = $row["Username"];
   $_SESSION['Password'] = $row["Password"];

   echo "Welcome " . $_SESSION['Username'] . "<br>";
   echo "Your email address is " . $_SESSION['Email'] . "<br>";
   echo "Your account ID is " . $_SESSION['ID'] . "<br>";
   echo "Your password is " . $_SESSION['Password'] . "<br>";

   header('Location: ../html/loginRedirect.html');
} else {
   echo "Account not found, please re-enter your Username and Password or Register for new account.";
   header('Location: ../html/errorRedirect.html');
}
?>