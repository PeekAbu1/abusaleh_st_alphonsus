<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $teacherID = $_POST["teacherID"];

    $query = "DELETE FROM Teachers WHERE TeacherID = $teacherID";

    if (mysqli_query($conn, $query)) {
        echo "Teacher deleted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
