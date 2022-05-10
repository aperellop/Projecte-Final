<?php
    class Restaurant{
        public $name;
        public $address;
        public $phonenumber;
        public $description;
        public $photography;

        public function __construct($name, $address, $phonenumber, $description, $photography){
            $this->name = $name;
            $this->address = $address;
            $this->phonenumber = $phonenumber;
            $this->description = $description;
            $this->photography = $photography;
        }
    }
?>