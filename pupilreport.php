<!DOCTYPE html>
<html>
<head>
    
    <title>PUPIL REPORT FORM</title>
    
</head>
<body>

    <form action="pupilreport.php" method="POST">
    
    Comment: <textarea name="comment" rows="5" cols="40"><br>
    Last name:<input type="text" name="surname"><br>
    Password:<input type="password" name="passwd"><br>
    House:<input type="text" name="house"><br>
    Year:<input type="text" name="year"><br>
    
    <h2>Current Users:</h2>
    
    <?php
    include_once("connection.php");
    $stmt = $conn->prepare("SELECT * FROM tblusers");
    $stmt->execute();
    while ($row =$stmt->fetch(PDO::FETCH_ASSOC))
        {   
            #print_r($row);
            echo("<h4>".$row["forename"]." ".$row["surname"]."</h4>");
        }
    ?>

</body>
</html>