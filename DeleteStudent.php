<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $studentID = $_POST["studentID"];

    $query = "DELETE FROM Students WHERE StudentID = $studentID";

    if (mysqli_query($conn, $query)) {
        echo "Student deleted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
