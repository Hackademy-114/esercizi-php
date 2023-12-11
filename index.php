<?php

function mediaNumeriPari($array) {
    $numeriPari = array_filter($array, function ($numero) {
        return $numero % 2 === 0;
    });

    if (empty($numeriPari)) {
        return "Nessun numero pari nell'array";
    }

    $media = array_sum($numeriPari) / count($numeriPari);
    return $media;
}

// Esempio di utilizzo
$arrayDiNumeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$risultato = mediaNumeriPari($arrayDiNumeri);
echo "La media dei numeri pari nell'array è: " . $risultato;

?>
