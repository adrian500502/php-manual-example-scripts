<?php

$mysqli->real_query("SELECT id FROM test ORDER BY id ASC");
$result = $mysqli->use_result();

echo "Result set order...\n";
foreach ($result as $row) {
    echo " id = " . $row['id'] . "\n";
}