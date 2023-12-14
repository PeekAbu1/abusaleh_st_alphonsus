<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $className = $_POST["className"];
    $capacity = $_POST["capacity"];
    $teacherID = $_POST["teacherID"];

    $query = "INSERT INTO Classes (ClassName, Capacity, TeacherID)
              VALUES ('$className', $capacity, $teacherID)";

    if (mysqli_query($conn, $query)) {
        echo "Class added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
