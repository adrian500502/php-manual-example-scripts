<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query('CREATE PROCEDURE p(OUT msg VARCHAR(50)) BEGIN SELECT "Hi!" INTO msg; END;');

$mysqli->query("SET @msg = ''");
$mysqli->query("CALL p(@msg)");

$result = $mysqli->query("SELECT @msg as _p_out");

$row = $result->fetch_assoc();
echo $row['_p_out'];