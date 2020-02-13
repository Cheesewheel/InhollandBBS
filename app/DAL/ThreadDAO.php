<?php
    class ThreadDAO{
        private $db;

        public function __construct(){
            $this->db = new Database;            
        }

        public function getThreads($boardId){
            $threadArray = array();

            // Get all the threads where boardID, inner join on student number
            $this->db->query("SELECT threads.threadId, threads.subject, threads.timeCreated, threads.imgUrl, threads.boardId, threads.comment, threads.latestReply, users.studentNumber
                              FROM threads
                              INNER JOIN users
                              ON threads.userId = users.userId
                              WHERE threads.boardId = :boardId
                              ORDER BY threads.latestReply DESC
                            ");

            $this->db->bind(':boardId', $boardId);

            $resultRow = $this->db->resultSet();
            
            foreach ($resultRow as $result) {
                $thread = new ThreadModel();

                $thread->setThreadId($result->threadId);
                $thread->setSubject($result->subject);
                $thread->setTimeCreated($result->timeCreated);
                $thread->setStudentNumber($result->studentNumber);
                $thread->setImgUrl($result->imgUrl);
                $thread->setBoardId($result->boardId);
                $thread->setComment($result->comment);

                array_push($threadArray, $thread);
            }
            return $threadArray;
        }

        public function getThread($threadId){
            // Get thread where threadId
            $this->db->query("SELECT threads.threadId, threads.subject, threads.timeCreated, threads.imgUrl, threads.boardId, threads.comment, users.studentNumber
                              FROM threads
                              INNER JOIN users
                              ON threads.userId = users.userId
                              WHERE threads.threadId = :threadId
                            ");

            // Bind values
            $this->db->bind(':threadId', $threadId);

            // Execute query
            $results = $this->db->resultSet();
            //die(var_dump($results));

            // Put result in ThreadModel object
            foreach ($results as $result) {
                $thread = new ThreadModel();

                $thread->setThreadId($result->threadId);
                $thread->setSubject($result->subject);
                $thread->setTimeCreated($result->timeCreated);
                $thread->setStudentNumber($result->studentNumber);
                $thread->setImgUrl($result->imgUrl);
                $thread->setBoardId($result->boardId);
                $thread->setComment($result->comment);

                array_push($threadArray, $thread);
            }
            
            // Return ThreadModel object
            return $thread;
        }

        public function getThreadsByUser($userId){
            $threadArray = array();

            // Get all the threads where boardID, inner join on student number
            $this->db->query("SELECT threads.threadId, threads.subject, threads.timeCreated, threads.imgUrl, threads.boardId, threads.comment, users.studentNumber
                              FROM threads
                              INNER JOIN users
                              ON threads.userId = users.userId
                              WHERE threads.userId = :userId
                              ORDER BY threads.timeCreated DESC
                            ");

            $this->db->bind(':userId', $userId);

            $resultRow = $this->db->resultSet();

            foreach ($resultRow as $result) {
                $thread = new ThreadModel();

                $thread->setThreadId($result->threadId);
                $thread->setSubject($result->subject);
                $thread->setTimeCreated($result->timeCreated);
                $thread->setStudentNumber($result->studentNumber);
                $thread->setImgUrl($result->imgUrl);
                $thread->setBoardId($result->boardId);
                $thread->setComment($result->comment);

                array_push($threadArray, $thread);
            }
            return $threadArray;
        }

        public function insertThread($thread){
            // Insert into table threads
            $this->db->query("  INSERT INTO threads (subject, userId, imgUrl, boardId, comment)
                                VALUES (:subject, :userId, :imgUrl, :boardId, :comment)
                            ");

            // Bind values
            $this->db->bind(':subject', $thread->getSubject());
            $this->db->bind(':userId', $thread->getUserID());
            $this->db->bind(':imgUrl', $thread->getImgUrl());    
            $this->db->bind(':boardId', $thread->getBoardId());
            $this->db->bind(':comment', $thread->getComment());

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                die('Query failed to execute!');
            }
        }

        public function insertReply($reply){
            // Insert into tabel threads
            $this->db->query("  INSERT INTO replies (threadId, userId, comment, imgUrl)
                                VALUES (:threadId, :userId, :comment, :imgUrl)
                            ");

            // Bind values
            $this->db->bind(':threadId', $reply->getThreadId());
            $this->db->bind(':userId', $reply->getUserID());
            $this->db->bind(':imgUrl', $reply->getImgUrl());    
            $this->db->bind(':comment', $reply->getComment());
            
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                die('Query failed to execute!');
            }
        }

        public function updateLatestReply($threadId){
            // Update field latestReply in tabel threads
            $this->db->query("  UPDATE threads
                                SET latestReply = :latestReply
                                WHERE threadId = :threadId
                            ");

            // Bind values
            $this->db->bind(':latestReply', date('Y-m-d H:i:s'));
            $this->db->bind(':threadId', $threadId);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                die('Query failed to execute!');
            }
        }

        public function getReplyCount($thread){
            $this->db->query("  SELECT COUNT(replyId)
                                FROM replies
                                WHERE threadId = :threadId
                            ");

            // Bind values
            $this->db->bind(':threadId', $thread->getThreadId());

            // Execute query and put result in variable
            $replies = $this->db->single();

            return $replies;
        }

        public function getReplies($threadId){
            $repliesArray = array();

            // Get all the threads where boardID, inner join on student number
            $this->db->query("SELECT replies.replyId, replies.timeCreated, replies.imgUrl, replies.comment, users.studentNumber
                              FROM replies
                              INNER JOIN users
                              ON replies.userId = users.userId
                              WHERE replies.threadId = :threadId
                              ORDER BY replies.timeCreated ASC
                            ");

            $this->db->bind(':threadId', $threadId);

            $resultRow = $this->db->resultSet();

            foreach ($resultRow as $result) {
                $reply = new ReplyModel();

                $reply->setReplyId($result->replyId);
                $reply->setTimeCreated($result->timeCreated);
                $reply->setStudentNumber($result->studentNumber);
                $reply->setImgUrl($result->imgUrl);
                $reply->setUserId($result->userId);
                $reply->setComment($result->comment);

                array_push($repliesArray, $reply);
            }
            return $repliesArray;
        }

        public function getLast3Replies($threadId){
            $repliesArray = array();

            // Get all the threads where boardID, inner join on student number
            $this->db->query("SELECT replies.replyId, replies.timeCreated, replies.imgUrl, replies.comment, users.studentNumber
                              FROM replies
                              INNER JOIN users
                              ON replies.userId = users.userId
                              WHERE replies.threadId = :threadId
                              ORDER BY replies.timeCreated DESC
                              LIMIT 3
                            ");

            $this->db->bind(':threadId', $threadId);

            $resultRow = $this->db->resultSet();
            $reverted = new ArrayIterator(array_reverse($resultRow));

            foreach ($reverted as $result) {
                $reply = new ReplyModel();

                $reply->setReplyId($result->replyId);
                $reply->setTimeCreated($result->timeCreated);
                $reply->setStudentNumber($result->studentNumber);
                $reply->setImgUrl($result->imgUrl);
                $reply->setComment($result->comment);

                array_push($repliesArray, $reply);
            }
            return $repliesArray;
        }        
    } 