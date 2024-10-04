<?php
include 'db_config.php';
$result = mysqli_query($conn, "SELECT * FROM uploads");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<a href='" . $row['file_path'] . "' download>" . $row['filename'] . "</a><br>";
}
?>
