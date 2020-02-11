<?php
    class ThreadModel {
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
    }
