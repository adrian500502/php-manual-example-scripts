<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");
$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');

$mysqli->multi_query("CALL p()");

do {
    if ($result = $mysqli->store_result()) {
        printf("---\n");
        var_dump($result->fetch_all());
        $result->free();
    }
} while ($mysqli->next_result());