<?php
    class Account{
        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }
        
        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
            $this->validateUsername($un);
            $this->validateFirsteName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2); 
        }

        private function validateUsername($un) {
            if(strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, "Your username must be between 6-25 characters");
                return;
            }
        }

        private function validateFirstName($fn) {
            if(strlen($fn) > 25 || strlen($fn) < 3 ) {
                array_push($this->errorArray, "Your first name must be between 3-25 characters");
                return;
            }
        }

        private function validateLastName($ln) {
            if(strlen($ln) > 25 || strlen($ln) < 3) {
                array_push($this->errorArray, "Your last name must be between 3-25 characters");
                return;
            }
        }

        private function validateEmails($em, $em2) {
            if($em != $em2) {
                array_push($this->errorArray, "Your emails don't match");
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                arrya_push($this->errorArray, "Your email is invalid");
                return;
            }
        }

        private function validatePasswords($pw, $pw2) {
            if($pw != $pw2) {
                array_push($this->errorArray, "Your password don't match");
                return;
            }
            if(preg_match('/[^A-Za-z0-9]/', $pw)) {
                array_push($this->errorArray, "Password can contain only letters and numbers");
                return;
            }
            if(strlen($pw) < 6) {
                array_push($this->errorArray, "Your password have to be more than 6 characters");
                return;
            }
        }


    }
?>