<?php
include_once("connection.php");
$statement = $conn->prepare("DROP TABLE IF EXISTS tblusers;");
$statement -> execute();
$statement -> closeCursor();
?>