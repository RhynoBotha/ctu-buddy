<?php
include 'db_config.php';
$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY timestamp DESC");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p><strong>" . $row['name'] . "</strong>: " . $row['comment'] . " (" . $row['timestamp'] . ")</p>";
}
?>
