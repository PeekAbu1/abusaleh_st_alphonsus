<?php
$servername = "127.0.0.1";
$database = "school";

$conn = mysqli_connect($servername, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
