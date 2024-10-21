<?php
    $user = "Alcaraz";
    $passwd = "papascalientes";
    $server = "localhost";
    $dbname = "datos";
    $username = $_POST["userName"];
    $password = $_POST ["password"];

    $conn = mysqli_connect($server, $user, $passwd, $dbname);
    if(!$conn) {
        echo "Data Base Unreachable<br>";
        die("Conection failed:" . mysqli_connect_error());
    } else {
        if($username == "Alcaraz" and $password == "papascalientes") {
            header("Location: home.php");
        } else if($username == "Fernando" and $password == "lalamamaconda") {
            header("Location: ../selectl.html");
        } else {
            header("Location: ../index.html");
        }
    }
?>