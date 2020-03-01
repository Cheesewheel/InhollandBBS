<?php
    class SearchDAO{
        private $db;

        public function __construct(){
            $this->db = new Database;            
        }
    
        public function search($searchValue, $searchColumn){
            $resultArray = array();

            // Get all users LIKE supplied value
            $this->db->query("  SELECT name, lastName, studentNumber, email, registrationDate
                                FROM `users` 
                                WHERE `$searchColumn` 
                                LIKE '$searchValue'
            ");

            

            $resultRow = $this->db->resultSet();
            
            //die(var_dump($resultRow));

            return $resultRow;
        }
    }