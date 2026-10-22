<?php

$json_string = file_get_contents('./cds.json');

$cds = json_decode($json_string, true);

$newCd = [
    "title"  => $_POST["title"],
    "artist" => $_POST["artist"],
    "year"   => (int) $_POST["year"],
    "img"    => $_POST["img"]
];

array_push($cds, $newCd);

$json_string = json_encode($cds);

file_put_contents('./cds.json', $json_string);

header('Location: ./index.php');

?>