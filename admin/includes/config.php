<?php

/* DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shopbanhang');
 Establish database connection.*/
try {
    $dbh = new PDO("mysql:host=localhost;dbname=shopbanhang", 'root', "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>