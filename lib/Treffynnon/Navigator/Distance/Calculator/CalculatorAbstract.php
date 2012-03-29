<?php

namespace Treffynnon\Navigator\Distance\Calculator;

use Treffynnon\Navigator as N;
use Treffynnon\Navigator\CelestialBody as CB;

abstract class CalculatorAbstract {

    public $celestialBody = null;

    /**
     * Calculate the distance between two coordinates
     * @return float Distance in metres
     */
    abstract public function calculate(N\LatLong $point1, N\LatLong $point2);

    public function __construct(CB\CelestialBodyAbstract $body = null) {
        if(is_null($body)) {
            $body = new CB\Earth;
        }
        $this->setCelestialBody($body);
    }
    
    public function setCelestialBody(CB\CelestialBodyAbstract $body) {
        $this->celestialBody = $body;
    }

    public function getCelestialBody() {
        return $this->celestialBody;
    }
}