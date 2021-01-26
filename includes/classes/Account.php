<?php
    class Account {
        public function __construct() {
            $this -> errorArray = array();
        }
    
        public function register($fn, $ln, $em, $em2, $pw, $pw2) {
            // $this -> function() === this.function(); //
            $this -> validateFirstName($fn);
            $this -> validateLastName($ln);
            $this -> validateEmails($em,$em2);
            $this -> validatePasswords($pw, $pw2);
        }

        private function validateUserName($username) {
            if (strlen($username) > 55 || strlen($username) < 5) {
                array_push($this -> errorArray, 'Your username must be between 5 and 25 chars');
                return;
            }
            // TODO : check if user already exists
        }

        private function validatefirstName($firstName) {
            
        }

        private function validateLastName($lastName) {

        }

        private function validateEmails($email, $email2) {

        }
        private function validatePasswords($password, $password2) {

        }
    }
?>