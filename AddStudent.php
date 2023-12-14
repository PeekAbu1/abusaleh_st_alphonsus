<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $name = $_POST["studentName"];
    $address = $_POST["studentAddress"];
    $medicalInfo = $_POST["medicalInfo"];
    $classID = $_POST["classID"];
    $parent1ID = $_POST["parent1ID"];
    $parent2ID = $_POST["parent2ID"];

    $query = "INSERT INTO Students (Name, Address, MedicalInfo, ClassID, Parent1ID, Parent2ID)
              VALUES ('$name', '$address', '$medicalInfo', $classID, $parent1ID, $parent2ID)";

    if (mysqli_query($conn, $query)) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
