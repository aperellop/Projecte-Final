<?php
    class Route{
        public $id;
        public $sector;
        public $name;
        public $description;
        public $grade;

        public function __construct($id, $sector, $name, $description, $grade){
            $this->id = $id;
            $this->sector = $sector;
            $this->name = $name;
            $this->description = $description;
            $this->grade = $grade;
        }
    }
?>