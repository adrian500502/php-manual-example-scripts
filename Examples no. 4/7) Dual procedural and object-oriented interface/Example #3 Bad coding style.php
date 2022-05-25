<?php

$mysqli = new mysqli("example.com", "user", "password", "database");

$result = mysqli_query($mysqli, "SELECT 'Possible but bad style.' AS _msg FROM DUAL");

if ($row = $result->fetch_assoc()) {
    echo $row['_msg'];
}