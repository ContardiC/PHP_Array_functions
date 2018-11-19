<?php
/**
 * User: Carlo Contardi
 * Date: 28/10/18
 * Time: 11:24
 */

// Contare gli elementi di un array

$partecipanti = ['Simone', 'Gabriele', 'il Coni', 'il Merlo'];
echo "Ci saranno " . count($partecipanti) . " partecipanti all'evento";

// Verificare che un elemento sia contenuto in un array
$partecipanti = ['Simone', 'Gabriele', 'Renato', 'Giuseppe'];
if (in_array('Simone', $partecipanti)) {
    echo "Simone è uno dei partecipanti";
} else {
    echo "Simone non parteciperà all'evento";
}

// Mescolare gli elementi di un array
$partecipanti = ['Simone', 'Gabriele', 'Renato', 'Giuseppe'];
shuffle($partecipanti);
print_r($partecipanti);

// Invertire l'ordine degli elementi
$partecipanti = ['Simone', 'Gabriele', 'Renato', 'Giuseppe'];
$ordine_inverso = array_reverse($partecipanti);
print_r($ordine_inverso);

// Unire due array
$partecipanti_lista_A = ['Simone', 'Gabriele'];
$partecipanti_lista_B = ['Renato', 'Giuseppe'];
$partecipanti_lista_C = ['Maria', 'Daniela'];
$partecipanti = array_merge($partecipanti_lista_A, $partecipanti_lista_B, $partecipanti_lista_C);
print_r($partecipanti);

// Estrarre una porzione di un array
/*
     l'array;
    l'offset, ovvero l'elemento da cui iniziare l'estrazione;
    la lunghezza, ovvero il numero di elementi da estrarre a partire dall'offset.

 */
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$output = array_slice($array, 0, 3);
print_r($output);

// Estrarre le chiavi o i valori da un array multidimensionale
$array = [
    'Simone' => 29,
    'Marco' => 28,
    'Michele' => 35,
    'Luca' => 22
];
$nomi = array_keys($array);
$anni = array_values($array);
print_r($nomi);
print_r($anni);