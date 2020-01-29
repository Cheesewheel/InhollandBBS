<?php
class UserDAO{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function register($user){
        // Insert into table user
        $this->db->query('INSERT INTO users (name, lastName, studentNumber, email, password)
                          VALUES (:name, :lastName, :studentNumber, :email, :password)');
        // Bind values
        $this->db->bind(':name', $user->getName());
        $this->db->bind(':lastName', $user->getLastname());
        $this->db->bind(':email', $user->getEmail());
        $this->db->bind(':studentNumber', $user->getStudentNumber());
        $this->db->bind(':password', $user->getPassword());

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            die('Query failed to execute!');
        }
    }

    // Login user
    public function login($user){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $user->getEmail());

        $row = $this->db->single();

        $hashedPassword = $row->password;
        if(password_verify($user->getPassword(), $hashedPassword)){
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email
    public function findUserByEmail($email){
        // Prepare query
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Bind values
        $this->db->bind(':email', $email);

        // Execute
        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function newPassword($token, $password){
        // Prepare query
        $this->db->query('  UPDATE users
                            INNER JOIN tokens
                                ON users.email = tokens.email
                            SET users.password = :password
                            WHERE tokens.token = :token');

        // Bind values
        $this->db->bind(':password', $password);
        $this->db->bind(':token', $token);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            die('Query failed to execute!');
        }
    }

    public function verificateUser($token){
        // Prepare query
        $this->db->query('  UPDATE users
                            INNER JOIN tokens
                                ON users.email = tokens.email
                            SET users.verified = "1"
                            WHERE tokens.token = :token');

        // Bind values
        $this->db->bind(':token', $token);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            die('Query failed to execute!');
        }
    }
}
