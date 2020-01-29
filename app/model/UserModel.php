<?php
    class UserModel {
        private $name;
        private $lastName;
        private $studentNumber;
        private $email;
        private $password;
        private $passwordConfirm;

        //Get and Set for name
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        //Get and Set for lastName
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function getLastName(){
            return $this->lastName;
        }

        //Get and Set for studentHummer
        public function setStudentNumber($studentNumber){
            $this->studentNumber = $studentNumber;
        }
        public function getStudentNumber(){
            return $this->studentNumber;
        }

        //Get and Set for email
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        
        //Get and Set for password
        public function setPassword($password){
            $this->password = $password;
        }
        public function getPassword(){
            return $this->password;
        }

        //Get and Set for passwordConfirm
        public function setPasswordConfirm($passwordConfirm){
            $this->passwordConfirm = $passwordConfirm;
        }
        public function getPasswordConfirm(){
            return $this->passwordConfirm;
        }
    }
