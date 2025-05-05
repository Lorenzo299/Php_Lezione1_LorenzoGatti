<?php

// ! ESERCIZIO 1
//Definisci 4 variabili:
// Integer
// Float
// String
// Boolean
// A schermo, fai comparire il tipo di dato delle varie variabili.
// $numIntero = 29;
// $numDecimale = 15.5;
// $stringa = "Ciao sono Lorenzo";
// $booleano = true;

// echo $numIntero;
// echo $numDecimale;
// echo $stringa;
// echo $booleano;
// var_dump($numDecimale);
// var_dump($numIntero);
// var_dump($booleano);
// var_dump($stringa);



// ESERCIZIO 2 // Date le seguenti variabili:
// $text1 = "Marco ";
// $text2 = "hai ";
// $text3 = "sete";
// $text4 = "? ";
// $text5 = "Perchè ";
// $text6 = "$text2";
// $text7 = 'bevuto ';
// $text8 = "tutto.";

// echo $text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8 
// correggi eventuali errori di scrittura , e stampa correttamente a terminale la stringa: “Marco hai sete? Perche' hai bevuto tutto.“ 



//! ESERCIZIO 3
// Dati i seguenti array:
// $words1 = [ 'vostro',
//  67,
//   'essere', 
//   'colle',
//    'mi', 
//    'sempre', 
//    [ 'oscura', 'era', 89, ['mezzo', 'E'], 'ritrovai', 'per'],
//     'diritta' ];

// $words2 = [
//     'elemento1' => 25.89,
//     'elemento2' => 'possa',
//     'elemento3' => [
//         'Virgilio',
//         'Favore',
//         'favore',
//         ['Fortuna']
//     ],
//     'fine'=> '!'
// ];
// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “E possa la Fortuna essere sempre a vostro favore!“.
// $mancante = "la";
// $mancante2 = "a";
// $mancante3 = "vostro";

// $results = $words1[6][3][1] . " " . $words2["elemento2"] . " " . $mancante . " " . $words2["elemento3"][3][0] . " " . $words1[2] . " " . $words1[5] . " " . $mancante2 . " " . $mancante3 . " " . $words2["elemento3"][2] . " " . $words2["fine"];
// echo ($results) ;

// HINT:
// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.








//!ESERCIZIO 5 difficile ma non troppo ! 😎 
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
$arrayNums = [28, 32, 15, 8, 45, 22];
$counterNumPari = 0; 
$sommaNum = 0;
foreach ($arrayNums as $num) {
    if($num % 2 == 0){
    $counterNumPari++;
    $sommaNum += $num;
    }
} ;
echo $mediaPari =  $sommaNum/$counterNumPari;

?>