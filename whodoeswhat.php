<!DOCTYPE html>
<html>
<head>
    
    <title>Who Does What</title>
    
</head>
<body>

    <h2>Who does what:</h2>
    
    <?php
    include_once("connection.php");
    
    $stmt = $conn->prepare("SELECT tblsubjects.subjectname as sn, 
    tblusers.forename as fn, 
    tblusers.surname as ln 
    
    FROM tblpupilstudies 
    INNER JOIN tblsubjects ON tblsubjects.subjectid=tblpupilstudies.subjectid
    INNER JOIN tblusers ON tblusers.userid=tblpupilstudies.userid");

    $stmt->execute();
    while ($row =$stmt->fetch(PDO::FETCH_ASSOC))
        {   
            #print_r($row);
            echo("<h4>".$row["sn"]." is studied by ".$row["fn"]." ".$row["ln"]."</h4>");
        }
    
    
    ?>

</body>
</html>