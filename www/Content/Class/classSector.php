<?php
    class Sector{
        public $spot;
        public $name;
        public $description;
        public $approach;

        public function __construct($spot, $name, $description, $approach){
            $this->spot = $spot;
            $this->name = $name;
            $this->description = $description;
            $this->approach = $approach;
        }
    }
?>