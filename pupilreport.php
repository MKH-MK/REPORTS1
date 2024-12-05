<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Select Pupil</title>
    </head>
    <body>
        <h1>Select a Pupil</h1>
        <form method="POST" action="addpupilreport.php">
            <label for="userid">Select Pupil:</label>
            <select name = "student">
                <?php
                    include_once("connection.php");
                    $stmt = $conn->prepare("SELECT * FROM tblusers WHERE role=0 ORDER BY surname ASC");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                        {
                            //print_r($row);
                            echo("<option value=".$row["userid"].">".$row["surname"].", ".$row["forename"]."</option>");
                        }
                ?>
            </select>
            <input type="submit">
        </form>
    </body>
</html>