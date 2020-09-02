<?php
$getal = 8;

echo is_int($getal), PHP_EOL;

//ARRAY + FOR LOOP

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 

print_r($klas);

for($i = 0; $i<count($klas); $i++){
    echo $klas[$i], PHP_EOL;
}
foreach($klas as $value)
    echo $value, PHP_EOL;

//COMBINATIE OPDRACHT
$bucket_list = [];
$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan je bucket list? ");

for($i = 0; $i<$hoeveelheid_activiteiten; $i++){
    array_push($bucket_list, $activity=readline("Welke activiteiten wil je toevoegen? "));
}

print_r($bucket_list);

foreach($bucket_list as $values) {
    echo $values, PHP_EOL;
}
?>