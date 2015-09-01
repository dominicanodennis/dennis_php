<?php

/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 21.08.15
 * Time: 23:59
 */
class Klasse
{

    var $zahl = 50;

    /**
     * Klasse constructor.
     * @param int $zahl
     */
    public function __construct($zahl)
    {
        $this->zahl = $zahl;
    }

    /**
     * @return int
     */
    public function getZahl()
    {
        return $this->zahl;
    }

    /**
     * @param int $zahl
     */
    public function setZahl($zahl)
    {
        $this->zahl = $zahl;
    }

    public function rechne($zahl1, $zahl2)
    {
        $ergebnis = $zahl1 * $zahl2;
        return $ergebnis;
    }

    public function iteriere()
    {
        $cars = array("Volvo", "BMW", "Toyota","Mercedes");
        //sort($cars);

        for ($i = 0; $i < count($cars); $i++) {
            echo "<pre>";
            print_r($cars);
            echo "</pre>";
        }
    }
}