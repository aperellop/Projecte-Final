<?php
    class Spot{
        public $id;
        public $name;
        public $description;
        public $approach;
        public $conditions;
        public $photography;

        public function __construct($id, $name, $description, $approach, $conditions, $photography){
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->approach = $approach;
            $this->conditions = $conditions;
            $this->photography = $photography;
        }
    }
?>