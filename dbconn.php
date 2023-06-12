<?php
$conn = mysqli_connect("localhost", "root", "", "comments");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
?>