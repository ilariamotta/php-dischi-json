<?php 

// leggere i file
$json_text = file_get_contents("./discs.json");

// decodificare in php
$discs = json_decode($json_text, true);

// creo nuovo dato disco

$new_disc = [
"titolo" => $_POST["titolo"],
"artista" => $_POST["artista"],
"cover" => $_POST["immagine"],
"anno" => $_POST["anno"],
"genere" => $_POST["genere"]
];

// inserimento nuovo disco
$discs[] = $new_disc;

// convertire in json
$discs_updated = json_encode($discs);

// sovrascrivere file
file_put_contents("./discs.json", $discs_updated);

// reindirizzamento alla pagina aggiornata
header("Location: ./index.php");

?>