<?php
include_once './Klasse.php';
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 21.08.15
 * Time: 23:58
 */

//$klasse = new Klasse(23);
//echo $result =$klasse->rechne(20,20);
//echo $result2 =$klasse->iteriere();
//echo $result;

//$cars = array("Volvo", "BMW", "Toyota");
//
//for($i=0;$i<count($cars);$i++){
//    echo "<pre>";
//    print_r ($cars[$i]);
//    echo "</pre>";

$termin[] = array('Datum' => 20121208,
    'Ort'   => "Wangen",
    'Band'  => "cOoL RoCk oPaS");

$termin[] = array('Datum' => 20120311,
    'Ort'   => "Stuttgart",
    'Band'  => "Die Hosenbodenband");

$termin[] = array('Datum' => 20120628,
    'Ort'   => "Tübingen",
    'Band'  => "flying socks");

$termin[] = array('Datum' => 20120628,
    'Ort'   => "Stuttgart",
    'Band'  => "flying socks");

echo "<pre>";


foreach ($termin as $nr => $inhalt)
{
    $band[$nr]  = strtolower( $inhalt['Band'] );
    $ort[$nr]   = strtolower( $inhalt['Ort'] );
    $datum[$nr] = strtolower( $inhalt['Datum'] );
}

// sortieren nach Datum
//array_multisort($datum, SORT_ASC, $termin);
//
//// sortieren nach Datum absteigend
//array_multisort($datum, SORT_DESC, $termin);
//
//// Sortierung nach Ort aufsteigend
//array_multisort($ort, SORT_ASC, $termin);
//
//// Sortierung nach Band aufsteigend
//array_multisort($band, SORT_ASC, $termin);

// sortieren nach Datum und Ort
array_multisort($datum, SORT_ASC, $ort, SORT_ASC, $termin);
print_r ( $termin );