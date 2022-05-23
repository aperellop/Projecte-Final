<?php
    class Route{
        public $sector;
        public $name;
        public $description;
        public $grade;

        public function __construct($sector, $name, $description, $grade){
            $this->sector = $sector;
            $this->name = $name;
            $this->description = $description;
            $this->grade = $grade;
        }
    }
?>