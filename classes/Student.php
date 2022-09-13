<?php
    class Student {
        public $name;
        public $age;
        public $gender;

        /** 
         * Sets the 'data' array's elements as the attributes of the class.
         * @param array $data
         *  +name (string) - name of student
         *  +age (int) - age of stufent
         *  +gender (string) - gender of student
         * @return self
        */

        function __construct(array $data) {
            if (isset($data["name"])) {
                $this->name=$data["name"];
            }       
            if (isset($data["age"])) {
                $this->age=$data["age"];
            }       
            if (isset($data["gender"])) {
                $this->gender=$data["gender"];
            }       
            
        }

        public function name() : string {
            return $this->name;
        }

        public function setname(string $nameSet) {
            $this->name = $nameSet;
        }

        public function age() : int {
            return $this->age;
        }

        public function setage(string $ageSet) {
            $this->age = $ageSet;
        }

        public function gender() : string {
            return $this->gender;
        }

        public function setgender(string $genderSet) {
            $this->gender = $genderSet;
        }

    }