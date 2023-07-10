<?php
$pdo = new PDO('mysql:dbname=tutorial;host=mysql:4307', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'ddddđ:' . '<hr>';
echo 'MySQL version:' . $row['Value'];

phpinfo();
