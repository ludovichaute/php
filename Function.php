<?php


    if(isset($_POST["name"])){
        $message = $_POST["name"];
        echo($message);

    }

  



?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="post">
    <input type="text" name="name">
    </form>
    
</body>
</html>



