<?php


?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <pre>
        <?php 
            $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' ); 

            print_r($pays);
            
            echo"<br><br>";
            
            $platePref = array('spagetti', 'frites', 'boulettes', '...');
            array_push($platePref, 'add');

            $platePref[] = 'test';
            
            print_r($platePref);

            $platePref[1] = 'autre test';
            
            print_r($platePref);
            
            $filmsPref = array('spiderman', 'autre');
            
            echo("<p>".$filmsPref[1]."</p>");

            $moi = array(
                'prénom' => 'ludovic' ,
                'nom' => 'Hautecoeur',
                'age' => 28,
                'aime le foot' => true,
                'hobbies' => array('Domotique', 'raspberry', 'informatique', 'bricolage' ),
                'hobbiesChild' => array('la programmation', 'la robotique', 'On verra dans l\'avenir',),
            );
            print_r($moi);

            $hobbiesFath = ['jardinage', 'bricolage', '...'];
            print_r($hobbiesFath);

            $hobbies_total_me = count($moi['hobbies']);

            $hobbies_total_father = count($hobbiesFath);

            $total_hobbies = $hobbies_total_me + $hobbies_total_father;

            echo("Mon père a ".$hobbies_total_father. " et moi " .$hobbies_total_me. " total: " .$total_hobbies);

            $moi['nom'] = "Dieudonné";

            print_r($moi);

            $ame_soeur = array(
                'prénom' => "Bella",
                'nom' => 'DontTouch',
                'age' => 28,
                'aime le téléphone' => false,
                'hobbies' => array('tennis', ''),
                
            );

            print_r($ame_soeur);

            $array_merger = array_merge($moi['hobbies'], $ame_soeur['hobbies']);

            $array_interr = array_intersect($moi['hobbies'], $ame_soeur['hobbies']);

            print_r($array_merger);

            print_r($moi['hobbies']);

            $web_development = array('frontend' => array(),'backend' => array());
            echo "<p>test</p>";

            
            var_dump($web_development);
            array_push($web_development['frontend'], 'xhtml');
            array_push($web_development['backend'], 'Ruby on Rails');
            array_push($web_development['frontend'], 'CSS');
            array_push($web_development['backend'], 'Flash');
            array_push($web_development['frontend'], 'Javascript');

            $web_development['frontend'][0] = 'html';
            

            array_splice($web_development['backend'],1);

            print_r($web_development);
            ?>
    </pre>
</body>
</html>