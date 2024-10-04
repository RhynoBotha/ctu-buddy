<?php
include 'db_config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Thank you for subscribing!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
