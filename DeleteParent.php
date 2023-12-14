<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $parentID = $_POST["parentID"];

    $query = "DELETE FROM Parents WHERE ParentID = $parentID";

    if (mysqli_query($conn, $query)) {
        echo "Parent deleted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
