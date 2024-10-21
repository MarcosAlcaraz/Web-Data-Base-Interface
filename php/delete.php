<?php
$table = $_POST["table"];
$columncondition = $_POST["columncondition"];
$operatorcondition = $_POST["operatorcondition"];
$valuecondition = $_POST["valuecondition"];
$confirmation = $_POST["confirmation"];

if($confirmation != "Delete") {
    echo "<br><h1>Operation Canceled</h1><h3>Please Write 'Delete' in the Verification Box</h3><br>";
} else {
    $conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

    if (!$conn) {
        echo "Database Unreachable.";
        die("Conection Failed: " . mysqli_connect_error());
    }

    if($conn->query("DELETE FROM $table WHERE $table.$columncondition $operatorcondition $valuecondition ")) {
        echo "<br><h1>Data Deleted Successfuly</h1><br><a href='../delete.html' >Back</a>";
    } else {
        echo "<br><h1>Data can not be deleted</h1><br><a href='../delete.html' >Back</a>";
    }
}
?>