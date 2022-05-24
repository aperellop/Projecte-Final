<?php
    class Sector{
        public $id;
        public $spot;
        public $name;
        public $description;
        public $approach;

        public function __construct($id, $spot, $name, $description, $approach){
            $this->id = $id;
            $this->spot = $spot;
            $this->name = $name;
            $this->description = $description;
            $this->approach = $approach;
        }
    }
?>