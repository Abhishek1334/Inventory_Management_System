<?php
$conn = new mysqli("localhost", "root", "", "shelfwise_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = file_get_contents('sql/shelfwise_db.sql');

if ($conn->multi_query($sql)) {
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->next_result());
    echo "Database setup complete!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
