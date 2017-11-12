<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 25.09.2017
 * Time: 12:07
**/
namespace Marko\Flaggen;
abstract class Flagge
{
    private $bezeichnung = "Eine wunderschöne Flagge.";
    private $farbe = "Keine Farbe";

    /**
     * Flagge constructor.
     * @param $bezeichnung
     * @param $farbe
     */
    public function __construct($bezeichnung, $farbe)
    {
        $this->bezeichnung = $bezeichnung;
        $this->farbe = $farbe;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $flaeche = $this->getFlaeche();
        return $this->bezeichnung . " " . $this->farbe . " " . $flaeche;
    }
}