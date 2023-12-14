<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $name = $_POST["teacherName"];
    $address = $_POST["teacherAddress"];
    $phone = $_POST["teacherPhone"];
    $annualSalary = $_POST["annualSalary"];
    $backgroundCheck = $_POST["backgroundCheck"];

    $query = "INSERT INTO Teachers (Name, Address, Phone, AnnualSalary, BackgroundCheck)
              VALUES ('$name', '$address', '$phone', $annualSalary, '$backgroundCheck')";

    if (mysqli_query($conn, $query)) {
        echo "Teacher added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
