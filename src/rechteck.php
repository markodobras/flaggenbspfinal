<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 08.10.2017
 * Time: 12:13
 */

namespace Marko\Flaggen;
class Rechteck extends Flagge
{
    private $länge;
    private $breite;
    /**
     * Rechteck constructor.
     * @param $bezeichnung
     * @param $farbe
     * @param $länge
     * @param $breite
     */
    public function __construct($bezeichnung, $farbe, $länge, $breite)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->breite = $breite;
        $this->länge = $länge;
    }
    /**
     * @return float
     */
    public function getFlaeche():float
    {
        return $this->länge * $this->breite;
    }
}