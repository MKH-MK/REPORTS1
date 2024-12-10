<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Select Subject</title>
    </head>
    <body>
        <h1>Select a Subject for the Pupil</h1>
        <form method="POST" action="addpupilreportfinal.php">
            Subject:
            <select name="subjectid">
                <?php
                    array_map("htmlspecialchars", $_POST);
                    print_r($_POST);
                    include_once("connection.php");
                    $stmt = $conn->prepare("SELECT tu.forename,ts.subjectname,ts.subjectid FROM tblusers AS tu INNER JOIN tblpupilstudies AS tps ON tu.userid = tps.userid INNER JOIN tblsubjects AS ts ON tps.subjectid = ts.subjectid WHERE tu.userid = :selecteduserid;");
                    $stmt->bindParam(':selecteduserid', $_POST["student"]);
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                        {
                            //print_r($row);
                            //echo($row["forename"]." ".$row["subjectname"]."<br>");
                            echo("<option value=".$row["subjectid"].">".$row["subjectname"]."</option>");
                        }
                ?>
            </select>
            <?php
                echo("<input type='hidden' name='userid' value='" .$_POST['student']. "'>");
            ?>
            <br>
            Class Position:<input type="number" name="classposition" min="1">
            <br>
            Grade:<input type="radio" name="grade" value="A*" checked> A&#42;
            <input type="radio" name="grade" value="A" checked> A
            <input type="radio" name="grade" value="B" checked> B
            <input type="radio" name="grade" value="C" checked> C
            <input type="radio" name="grade" value="D" checked> D
            <input type="radio" name="grade" value="F" checked> F
            <input type="radio" name="grade" value="U" checked> U
            <br>
            Exam Mark:<input type="number" name="exammark" min="0">
            <br>
            Comment:<br><textarea name="comment" rows="6" cols="75"></textarea>
            <br>
            <input type="submit">
        </form>
    </body>
</html>