<?php
    class ThreadDAO{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getThreads($boardId){
            $threadArray = array();

            // Get all the threads where boardID, inner join on student number
            $this->db->query("SELECT threads.threadId, threads.subject, threads.timeCreated, threads.imgUrl, threads.boardId, threads.comment, users.studentNumber
                              FROM threads
                              INNER JOIN users
                              ON threads.userId = users.userId
                              WHERE threads.boardId = :boardId
                              ORDER BY threads.timeCreated DESC
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

        public function insertThread($thread){
            // Insert into tabel threads
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

        public function getReplyCount($thread){
            
        }
        
    } 