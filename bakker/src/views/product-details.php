<?php

class ProductDetails {
    private $naam;
    private $intro;
    private $afbeelding;
    private $ingrediënten;

    public function __construct($naam, $intro, $afbeelding, $ingrediënten) {
        $this->naam = $naam;
        $this->intro = $intro;
        $this->afbeelding = $afbeelding;
        $this->ingrediënten = $ingrediënten;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getIntro() {
        return $this->intro;
    }

    public function getAfbeelding() {
        return $this->afbeelding;
    }

    public function getIngrediënten() {
        return $this->ingrediënten;
    }
}
