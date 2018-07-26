<?php
    $nom = isset($_POST['name']);
    $somA = isset($_POST['somA']);
    $somB = isset($_POST['somB']);


if($nom && $somA && $somB){
    $word = $_POST['name'];
    $somA = $_POST['somA'];
    $somB = $_POST['somB'];
    $word_up = ucfirst($word);

    echo "<P>Nom: ".$word_up."</p>";

    if(is_numeric($somA) AND is_numeric($somA)){
        function somme($a,$b){
            return $a + $b;
        }
        $total = somme($somA,$somB);
        echo "<p>Total: " .$total. "</p>";
    } else{
        echo "Erreur, argument non numérique";
    }
}


$date = date('H\hi\:s');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <style>
    .warning{
        color: red;
    }
    
    </style>
</head>
<body>
    <?php  echo $date ?>
    <form method="post">
    <label for="">Nom</label>
    <input type="text" name="name">
    <label for="">Somme:</label>
    <input type="text" name="somA">
    <input type="text" name="somB">
    </form>

    <?php
    
    $phrase = "in code we trust!";
    
    $phrase = ucwords($phrase);

    echo $phrase;
    
    ?>
    <h3>Remplace</h3>
    <?php
    $mot1 = "caecotrophie";

    function replaceWords($mot){
     echo str_replace('ae', '&aelig', $mot);
    }
    replaceWords($mot1);
    echo "<p>inversé:</p>";
    function replaceWordsRev($mot){
        echo str_replace('æ', 'ae', $mot);
       }
    replaceWordsRev($mot1);
    ?>
</body>
</html>



