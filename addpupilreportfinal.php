<?php
//header('Location:pupilstudies.php');
include_once('connection.php');
array_map("htmlspecialchars", $_POST);
print_r($_POST);

//Array ( [subjectid] => 40 [userid] => 463 [classposition] => 2 [grade] => A [exammark] => 123 [comment] => test )


$stmt = $conn->prepare("UPDATE tblpupilstudies SET classposition = :classposition, classgrade = :grade, exammark = :exammark, comment = :comment WHERE userid = :userid AND subjectid = :subjectid;");
$stmt->bindParam(':classposition', $_POST["classposition"]);
$stmt->bindParam(':grade', $_POST["grade"]);
$stmt->bindParam(':exammark', $_POST["exammark"]);
$stmt->bindParam(':comment', $_POST["comment"]);
$stmt->bindParam(':userid', $_POST["userid"]);
$stmt->bindParam(':subjectid', $_POST["subjectid"]);
//echo($stmt);
$stmt->execute();
?>