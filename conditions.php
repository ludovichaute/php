
<h2>Exercice 1 : La chambre</h2>

<?php
$chambre_est_sale = true;
$chambre_est_sale = 2;

if ($chambre_est_sale == true){
    echo "</p>Range ta chambre, on dirait la cage d'un bonobo!</p>";
    if ($chambre_est_sale == 1){
        echo "<p>dégoutante</p>";
    }elseif($chambre_est_sale == 2){
        echo "<p>sale</p>";
    }elseif($chambre_est_sale == 3){
        echo "<p>en ordre</p>";
    }elseif($chambre_est_sale == 4){
        echo "<p>Immaculée</p>";
    }elseif($chambre_est_sale == 5){
        echo "<p>Maniaque</p>";
    }
} else {
    echo "<p>Ta chambre est trop propre, vis un peu!</p>";
    }

?>

<h2>Exercice 2 : L'heure </h2>
<?php
    $dates = date("Hi");
    $date = intval($dates);

    if ($date > 500 AND $date < 900){
        $message = "Bonjour";
    } 
    elseif($date >= 900 AND $date <= 1200){
        $message ="Bonne journée!";
    }elseif($date > 1200 AND $date <= 1600){
        $message ="Bon après-midi!";
    }elseif($date > 1600 AND $date <= 2100){
        $message ="Bonne soirée!";  
    } else {
        $message ="Bonne nuit!";
    }
    echo('<p>' .$message. '</p>');

?>

<h2>Exercice 3: L'age</h2>
<form method="get">
    <label for="age" id="age">Quel est votre age:</label>
    <input type="text" name="age" id="age"/>
    <label for="genre" id="genre">Homme:</label>
    <input type="radio" name="genre" value="homme" id="genre">
    <label for="genre" id="genre">Femme:</label>
    <input type="radio" name="genre" value="femme" id="genre">
    <p>
    <label for="lang">Parles-tu anglais?</label>
    <label for="lang">Oui</label>
    <input type="radio" name="lang" value="yes" id="lang">
    <label for="lang">Non</label>
    <input type="radio" name="lang" value="no" id="lang">
    </p>
    <p>
    <label for="note">Note:</label>
    <input type="number" id="note" name="note"
        placeholder="Min: 0, max: 20"
        min="0" max="20" />
    </p>
    <input type="submit">
</form>
<?php

    $is_age = !empty($_GET['age']);
    $is_genre = !empty($_GET['genre']);
    $is_lang = !empty($_GET['lang']);
    $is_note = !empty($_GET['note']);

    if ($is_age != NULL  AND $is_genre != NULL AND $is_lang != NULL AND $is_note != NULL) {
        $is_form = true;
        $ages = $_GET['age'];
        $genreH = $_GET['genre'] == 'homme';
        $note = $_GET['note'];
        
        settype($ages, "int");
        $lang = $_GET['lang'] == 'yes';

        if($ages < 12){
            if ($genreH) {
                if ($lang) {
                    $text = "Hello boy!";
                } else {
                    $text = "Salut petit!";
                }
            } else{
                if ($lang) {
                    $text = "Hello girl!";
                } else {
                    $text = "Salut petite!";
                }
            }
        }
        elseif($ages >= 12 AND $ages <= 17){
            if ($genreH){
                if ($lang) {
                    $text = "Hello Teenage boy!";
                } else {
                    $text = "Salut l'adolescent!";
                }
            } else {
                if ($lang) {
                    $text = "Hello Teenage girl!";
                } else {
                    $text = "Salut l'adolescente!";
                }
            }
        }elseif($ages >= 18 AND $ages <= 115){
            if ($genreH){
                if ($lang) {
                    $text = "Hello Sir!";
                } else {
                    $text = "Bonjour Monsieur!";
                }
            } else {
                if ($lang) {
                    $text = "Hello Lady!";
                } else {
                    $text = "Bonjour Madame!";
                }
            }
        } 
        else{
            if ($genreH){
                if ($lang) {
                    $text = "Wow! Still alive, old man?";
                } else {
                    $text = "Wow! Toujours vivant?";
                }
            } else {
                if ($lang) {
                    $text = "Wow! Still alive, old lady?";
                } else {
                    $text = "Wow! Toujours vivante?";
                }
                
            }
        } 
        if ($note <= 5) {
            $msg_note = "Ce travail est nul.";
        } elseif ($note >= 6 AND $note <= 9 ) {
            $msg_note = "Ce travail n'est pas terrible.";
        }elseif ($note == 10) {
            $msg_note = "Tout juste!";
        }elseif ($note >= 10 AND $note <= 14) {
            $msg_note =  "C'est pas mal.";
        }elseif ($note >= 15 and $note <= 18) {
            $msg_note = "Bravo!";
        }elseif ($note >= 19 AND $note <= 20) {
            $msg_note = "Police! Arrêtez ce tricheur!";
        }
       
       $msg1 = "Désolé, vous ne remplissez pas les critères de sélection.";

        if ($ages >= 21 AND $ages <=40 AND !$genreH) {
            $msg1 = "Bonjour, bienvenue parmi nous!";
        }

        echo($msg1);


        echo("<p>$text</p><p>Ta note est de : <strong>$note sur 20. </strong>$msg_note</p>");
        
    } else {
        echo('<h4> Veuillez remplir le formulaire!</h4>');
    }



    

?>