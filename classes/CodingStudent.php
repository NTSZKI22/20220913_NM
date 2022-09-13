<?php
    class CodingStudent extends Student {
        public $computerClassNumber;

        /** 
         * Sets the 'data' array's elements as the attributes of the class.
         * @param array $data
         *  +name (string) - name of student
         *  +age (int) - age of stufent
         *  +gender (string) - gender of student
         *  +computerClassNumber (int) - computer class number of student
         * @return self
        */

        function __construct($data) {
            parent::__construct($data);

            if(isset($data["classNumber"])) {
                $this->computerClassNumber = $data["classNumber"];
            }
        }

        public function computerClassNumber() : int {
            return $this->computerClassNumber;
        }

        public function setcomputerClassNumber(int $computerClassNumberSet) {
            $this->computerClassNumber = $computerClassNumberSet;
        }
    }