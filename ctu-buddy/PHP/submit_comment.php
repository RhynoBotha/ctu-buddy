<?php
include 'db_config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
    if (mysqli_query($conn, $sql)) {
        echo "Comment added!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
