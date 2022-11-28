<?php
require_once "config.php";
session_start();

$delAcc = $_SESSION['ID'];

//delete function
$sql = "DELETE FROM account WHERE ID = $delAcc";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: ../html/logout.html');
} else {
  echo "Error deleting record: " . $conn->error;
}

?>