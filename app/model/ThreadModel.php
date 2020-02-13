<?php
    class ThreadModel EXTENDS Model {        
        private $threadId;
        private $subject;
        private $timeCreated;
        private $userId;
        private $studentNumber;
        private $imgUrl;
        private $boardId;
        private $comment;
        private $replies;
        private $latestReply;

        public function __construct(){
            $this->threadDAO = $this->dal('ThreadDAO');
            $this->replyModel = $this->model('ReplyModel');            
        }
        
        //Get and Set for threadId
        public function setThreadId($threadId){
            $this->threadId = $threadId;
        }
        public function getThreadId(){
            return $this->threadId;
        }

        //Get and Set for subject
        public function setSubject($subject){
            $this->subject = $subject;
        }
        public function getSubject(){
            return $this->subject;
        }

        //Get and Set for timeCreated
        public function setTimeCreated($timeCreated){
            $this->timeCreated = $timeCreated;
        }
        public function getTimeCreated(){
            return $this->timeCreated;
        }

        //Get and Set for userId
        public function setUserId($userId){
            $this->userId = $userId;
        }
        public function getUserId(){
            return $this->userId;
        }

        //Get and Set for studentNumber
        public function setStudentNumber($studentNumber){
            $this->studentNumber = $studentNumber;
        }
        public function getStudentNumber(){
            return $this->studentNumber;
        }
        
        //Get and Set for imgUrl
        public function setImgUrl($imgUrl){
            $this->imgUrl = $imgUrl;
        }
        public function getImgUrl(){
            return $this->imgUrl;
        }

        //Get and Set for boardId
        public function setBoardId($boardId){
            $this->boardId = $boardId;
        }
        public function getBoardId(){
            return $this->boardId;
        }

        //Get and Set for comment
        public function setComment($comment){
            $this->comment = $comment;
        }
        public function getComment(){
            return $this->comment;
        }

        //Get and Set for replies
        public function setReplies($replies){
            $this->replies = $replies;
        }
        public function getReplies(){
            return $this->replies;
        }  
        
        //Get and Set for latestReply
        public function setLatestReply($latestReply){
            $this->latestReply = $latestReply;
        }
        public function getLatestReply(){            
            return $this->latestReply;
        }   
    
        // Upload an image
        public function uploadImage($image){
            //die(var_dump($image));
            $targetDir = "./img/threads/";
            $newImageName = bin2hex(openssl_random_pseudo_bytes(20));  
            $targetFile = $targetDir . basename($image['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
            $imageExtension = explode(".", $image['name']);

            // Check if image is really an image    
            $check = getimagesize($image["tmp_name"]);       
            if($check !== false) {
                //die("File is an image");
                $uploadOk = 1;
            } else {
                die(var_dump($image));
                $uploadOk = 0;
            }

            // Check file size
            if ($image["size"] > 5000000) {
                die("Sorry, your file is too large.");
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                die("Sorry, your file was not uploaded.");
            // if everything is ok, try to upload file
            } else {
                // Generate random name for image
                $targetFile = $targetDir . basename($newImageName) . "." . end($imageExtension);
                $url = basename($newImageName) . "." . end($imageExtension);
                if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                    return $url;                    
                } else {
                    die("Sorry, there was an error uploading your file.");
                }
            }
        }
    }
