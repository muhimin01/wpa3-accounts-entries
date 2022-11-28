<?php
require_once "assets/php/config.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>WPA3 | Main</title>
    <link rel="icon" href="assets/images/msuicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

<body>
    <div class="card">
        <h1 style="text-align: center;">
            Web Programming A3
        </h1>
    </div>

    <div class="topnav">
        <a href="main.html">Home</a>
        <a href="account.php">Account</a>
        <a href="#0" class="active">Entries</a>
        <a href="assets/php/logout.php" style="float:right" role="button">Logout</a>
    </div>

    <div class="container">
        <div class="card">
            <h2 style="text-align: center;">Entries</h2>
        </div>

        <div class="card">
            <form class="example" action="entries.php" method="post">
                <input type="text" placeholder="Search a username..." name="search">
                <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></i></button>
            </form>
        </div>

        <?php
        if (isset($_POST["search"])) {
            showSearch($conn);
        } else {
            showAll($conn);
        }

        function showSearch($conn)
        {
            $search = $_POST['search'];
            $sql = "SELECT ID, Username, Email FROM account WHERE Username LIKE '%$search%'";
            $result = $conn->query($sql);
            
            echo '<div class="card">';
            echo '<h2 style="text-align: center;">Results</h2>';
            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Username"] . "</td><td>" . $row["Email"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 Results found";
            }
            echo "</div>";
        }

        function showAll($conn)
        {
            $sql = "SELECT ID, Username, Email FROM account";
            $result = $conn->query($sql);
            
            echo '<div class="card">';
            if ($result->num_rows > 0) {
                echo "<table><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Username"] . "</td><td>" . $row["Email"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            echo "</div>";
        }

        ?>

    </div>

</body>

</html>