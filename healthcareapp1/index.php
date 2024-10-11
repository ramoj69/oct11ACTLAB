<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $query = "Select * from users where User_ID = 1";

    $stmt = $pdo->prepare($query);

    if($stmt->execute()){
        $user_ID1 = $stmt->fetch();
        echo "First name: ". $user_ID1['First_Name'] . "<br>";
        echo "Last name: ". $user_ID1['Last_Name'] . "<br>";
        echo "Gender: ". $user_ID1['Gender'] . "<br>";
        
    }
    ?>
</body>
</html>