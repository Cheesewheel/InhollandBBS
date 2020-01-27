<?php
    class UserModel {
        private $Name;
        private $LastName;
        private $studentNumber;
        private $email;
        private $password;
        private $passwordConfirm;

        //Get and Set for name
        public function setName($userName){
            $this->userName = $userName;
        }
        public function getName(){
            return $this->userName;
        }

        //Get and Set for lastName
        public function setLastName($userLastName){
            $this->userLastName = $userLastName;
        }
        public function getLastName(){
            return $this->userLastName;
        }

        //Get and Set for studentHummer
        public function setStudentNumber($studentNumber){
            $this->studentNumber = $studentNumber;
        }
        public function getstudentNumber(){
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
