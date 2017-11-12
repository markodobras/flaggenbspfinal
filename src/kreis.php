<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 08.10.2017
 * Time: 12:13
 */
namespace Marko\Flaggen;
class Kreis extends Flagge
{
    private $radius;
    /**
     * Kreis constructor.
     * @param $bezeichnung
     * @param $farbe
     * @param $radius
     */
    public function __construct($bezeichnung, $farbe, $radius)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->radius = $radius;
    }
    /**
     * @return float
     */
    public function getFlaeche():float
    {
        return pow($this->radius, 2) * pi();
    }
}