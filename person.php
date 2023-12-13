<?php

    class Person {
        private string $name;
        private string $country;
        public function __construct(?string $name = "", ?string $country = "") {
            $this->name = (gettype($name) == "string" ? $name : "");
            $this->country = (gettype($country) == "string" ? $country : "");
        }

        public function getName() {
            return $this->name;
        }
        public function getCountry() {
            return $this->country;
        }

        public function setName($name) {
            $this->name = $name;
        }
        public function setCountry($country) {
            $this->country = $country;
        }

    }



?>