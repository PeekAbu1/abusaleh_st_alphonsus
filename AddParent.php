<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $name = $_POST["parentName"];
    $address = $_POST["parentAddress"];
    $email = $_POST["parentEmail"];
    $telephone = $_POST["parentTelephone"];

    $query = "INSERT INTO Parents (Name, Address, Email, Telephone)
              VALUES ('$name', '$address', '$email', '$telephone')";

    if (mysqli_query($conn, $query)) {
        echo "Parent added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>