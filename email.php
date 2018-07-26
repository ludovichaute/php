<?php
    if(isset($_POST["email"])){
        function emailRec(){
            $email = $_POST["email"]; 
            if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
                echo '<div class="info">Adresse email est correct.</div>';
            } else {
                echo '<div class="warning">Adresse email incorrecte.</div>';
            }
        }
       emailREc();
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Email</title>

</head>
<body>
    <h3>Fonction email:</h3>
    <form method="post">
        <label>email:</label>
        <input type="text" name="email">
        <button type="submit">Submit</button>
    </form>

</body>
</html>