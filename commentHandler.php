<?php
require("dbconn.php");

session_start();

$name = $_POST['name'];
$comment = $_POST['comment'];
$week = $_SESSION['week'];

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO comment (name, comment_data, date, week)
    VALUES ('$name', '$comment', null, $week)";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
        header("location: discuss.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

// Close the connection
mysqli_close($conn);
    
}
?>