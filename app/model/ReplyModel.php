<?php
    class ReplyModel {
        private $threadId;
        private $postId;
        private $timeCreated;
        private $userId;
        private $studentNumber;
        private $imgUrl;
        private $comment;


        //Get and Set for threadId
        public function setThreadId($threadId){
            $this->threadId = $threadId;
        }
        public function getThreadId(){
            return $this->threadId;
        }

        //Get and Set for postId
        public function setPostId($postId){
            $this->postId = $postId;
        }
        public function getPostId(){
            return $this->postId;
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

        //Get and Set for comment
        public function setComment($comment){
            $this->comment = $comment;
        }
        public function getComment(){
            return $this->comment;
        }
    }
