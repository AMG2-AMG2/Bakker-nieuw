<?php

class Product {
    private $id;
    private $naam;
    private $intro;
    private $afbeelding;

    public function __construct($id, $naam, $intro, $afbeelding) {
        $this->id = $id;
        $this->naam = $naam;
        $this->intro = $intro;
        $this->afbeelding = $afbeelding;
    }

    public function getId() {
        return $this->id;
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
}
