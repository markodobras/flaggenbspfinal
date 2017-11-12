<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 08.10.2017
 * Time: 12:13
 */
namespace Marko\Flaggen;
class Quadrat extends Flagge
{
    private $seite;
    /**
     * Quadrat constructor.
     * @param $bezeichnung
     * @param $farbe
     * @param $seite
     */
    public function __construct($bezeichnung, $farbe, $seite)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->seite = $seite;
    }
    /**
     * @return float
     */
    public function getFlaeche():float
    {
        return pow($this->seite, 2);
    }
}