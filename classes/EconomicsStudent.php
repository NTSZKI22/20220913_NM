<?php
    class EconomicsStudent extends Student {
        public $taxNumber;

        /** 
         * Sets the 'data' array's elements as the attributes of the class.
         * @param array $data
         *  +name (string) - name of student
         *  +age (int) - age of stufent
         *  +gender (string) - gender of student
         *  +taxNumber (int) - tax number of student
         * @return self
        */

        function __construct($data) {
            parent::__construct($data);

            if(isset($data["taxNumber"])) {
                $this->taxNumber = $data["taxNumber"];
            }
        }

        public function taxNumber() : int {
            return $this->taxNumber;
        }

        public function settaxNumber(int $taxNumberSet) {
            $this->taxNumber = $taxNumberSet;
        }
    }