

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
<?php
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
echo "<pre>";
echo "<h3>Pronoms personnels: </h3>";
print_r($pronoms_personnels);
echo "</pre>";

echo "<h3>Le verbe: Coder</h3>";
foreach ($pronoms_personnels as $key => $value) {
    if ($value == 'Je') {
        echo "<p>" .$value. " code</p>";
    } elseif ($value == 'Tu') {
        echo "<p>" .$value. " codes</p>";
    } elseif ($value == 'Il/Elle') {
        echo "<p>" .$value. " code</p>";
    } elseif ($value == 'Nous') {
        echo "<p>" .$value. " codons</p>";
    } elseif ($value == 'Vous') {
        echo "<p>" .$value. " codez</p>";
    } else{
        echo "<p>" .$value. " codent</p>";
    }
    
}
echo "<h3>La boucle for:</h3>";

// for ($i=1; $i <= 120 ; $i++) { 
//     echo "<p>compteur: ".$i. "</p>";
// }

echo "<h3>La boucle while:</h3>";

// $counter = 0;

// while ($counter <= 120){
//     $counter++;
//     echo "<p>compteur: ".$counter. "</p>";
// }

echo "<h3>La boucle ForEach sur les prénoms de la classe:</h3>";

$prenom_de_la_classe =["Sourech", "Mariane", 'Claudiu', "julie", "Pedro", "Basptist", "Stéphan", "Paul", "Gaetano", "mostapha", "Romain", "Morgane", "Dylan", "Andrea", "Lilane", "Guillaume", "Meilyn", "Son", "Alex", "Bertrand", "Michael"];

foreach ($prenom_de_la_classe as $key => $value) {
   echo "<p>" .$value. "</p>";
}
echo "Nombres d'élèves de la classe: ".$key;

echo "<h3>10 Pays du monde:</h3>";
?>

<select name="pays" id="pays">
  <?php

  $pays = array(
    'BE'=> "Belgique",
    'CO'=> "Colombie",
    'FR'=> "France",
    'GB'=> "Angleterre",
    'ES'=> "Espagne",
    'USA'=> "USA",
    'AR'=> "Argentine",
    'SU'=> "Suéde",
    'AU'=> "Australie",
    'HA'=> "Hawai" );

    
  foreach ($pays as $key => $value) {
    echo '<option value='.$key.'>'.$value.'</option>';
    
  }

  ?>
</select>
    <script>
    var recup = document.getElementById("pays").addEventListener("change", function test() {
        let value = document.getElementById("pays").value;
        console.log(value);
    });
    
    
    </script>
    <?php
    echo "<h1>test</h1>";
    

?>


</body>

</html>