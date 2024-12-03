<!DOCTYPE html>
<html>
<title>Add pupil to a subject</title>
    
</head>
<body>
    <form action="addpupiltosubject.php" method = "post">
    <select name ="student">
    
    <?php
        include_once("connection.php");
        $stmt = $conn->prepare("SELECT * FROM tblusers WHERE role=0 ORDER BY surname ASC");
        $stmt->execute();
        while ($row =$stmt->fetch(PDO::FETCH_ASSOC))
            {
                #print_r($row);
                echo("<option value=".$row["userid"].">".$row["surname"]." , ".$row["forename"]."</option>");
            }
    ?>
    </select>
    <select name ="subject">
    
    <?php
        include_once("connection.php");
        $stmt = $conn->prepare("SELECT * FROM tblsubjects ORDER BY subjectname ASC");
        $stmt->execute();
        while ($row =$stmt->fetch(PDO::FETCH_ASSOC))
            {
                #print_r($row);
                echo("<option value=".$row["subjectid"].">".$row["subjectname"]."</option>");
            }
    ?>
    </select>
    <input type="submit" value="Add pupil to subject">

</form>

</body>
</html>