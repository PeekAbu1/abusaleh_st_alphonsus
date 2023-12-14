<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $classID = $_POST["classID"];

    $query = "DELETE FROM Classes WHERE ClassID = $classID";

    if (mysqli_query($conn, $query)) {
        echo "Class deleted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
