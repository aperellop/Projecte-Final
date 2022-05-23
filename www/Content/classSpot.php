<?php
    class Spot{
        public $name;
        public $description;
        public $approach;
        public $conditions;
        public $photography;

        public function __construct($name, $description, $approach, $conditions, $photography){
            $this->name = $name;
            $this->description = $description;
            $this->approach = $approach;
            $this->conditions = $conditions;
            $this->photography = $photography;
        }
    }
?>