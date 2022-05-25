<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query("CREATE PROCEDURE p(IN id_val INT) BEGIN INSERT INTO test(id) VALUES(id_val); END;");

$mysqli->query("CALL p(1)");

$result = $mysqli->query("SELECT id FROM test");

var_dump($result->fetch_assoc());