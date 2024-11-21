<?php
include_once("connection.php");
$statement = $conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gender VARCHAR(1) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
House VARCHAR(20) NOT NULL,
Year INT(2) NOT NULL,
Role TINYINT(1))
");

$statement -> execute();
$statement -> closeCursor();
?>