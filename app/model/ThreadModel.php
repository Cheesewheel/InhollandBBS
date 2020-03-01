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
        
    // Getters and setters
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
    

    // Methods
        // Display the given threads
        public function displayThreads($threads){
            foreach($threads as $thread){       
                echo '
                    <div class="thread" id="' . $thread->getThreadId() . '"> 
                        <div class="OP" class="post">                            
                            <div class="opHeader">
                                <span class="postSubject">' . $thread->getSubject() . '<span>
                                <span class="posterName">' . $thread->getStudentNumber() . '</span>
                                <span class="postDateTime">' . $thread->getTimeCreated() . '</span>
                                <span class="postId">Thread.' . $thread->getThreadId() .'<span>
                                <span class="postDateTime">Replies: ' .  $thread->getReplies()  . '</span>
                                <a class="viewThread" href="' . URLROOT . '/boards/threadviewer?thread=' . $thread->getThreadId()  . '">View</a>
                            </div>
                            '. (!empty($thread->getImgUrl()) 
                            ?   '<span class="imageInfo">' . $thread->getImgUrl() . '</span><br>
                                <a href="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '" target="_blank">
                                    <img class="image" alt="image" src="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '"></img>
                                </a>' 
                            : '') . '
                            <br>
                            <p>' . $thread->getComment() . '</p>
                        </div>
                    </div>
                ';                

                // Display the last up to 3 replies if the thread has them
                if($thread->getReplies() > 0) {                
                    // Get the last 3 replies of the thread
                    $replies = $this->threadDAO->getLast3Replies($thread->getThreadId());
                    
                    // Display the replies
                    $this->replyModel->displayReplies($replies);
                }     
            }            
        } 

        // Display given thread
        public function displayThread($thread){
            echo '
            <div class="thread" id="' . $thread->getThreadId() . '"> 
                <div class="OP" class="post">                                    
                    <div class="opHeader">
                        <span class="postSubject">' . $thread->getSubject() . '<span>
                        <span class="posterName">' . $thread->getStudentNumber() . '</span>
                        <span class="postDateTime">' . $thread->getTimeCreated() . '</span>
                        <span class="postId">Thread.' . $thread->getThreadId() .'<span>
                        <span class="postDateTime">Replies: ' .  $thread->getReplies()  . '</span>
                        <a class="viewThread" href="' . URLROOT . '/boards/threadviewer?thread=' . $thread->getThreadId()  . '">View</a>
                    </div>
                    '. (!empty($thread->getImgUrl()) 
                    ?   '<span class="imageInfo">' . $thread->getImgUrl() . '</span><br>
                        <a href="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '" target="_blank">
                            <img class="image" alt="image" src="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '"></img>
                        </a>' 
                    : '') . '  
                    <br>
                    <p>' . $thread->getComment() . '</p>
                </div>
            </div>
            ';            
        }
       
        // Create thread on given board
        public function createThread($post, $files, $boardId){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);            
            $imageUrl = $this->uploadImage($files['image']);

            // Init data
            $thread = new ThreadModel();
            $thread->setSubject(trim($_POST['subject']));
            $thread->setUserId($_SESSION['userId']);

            if(!empty($imageUrl)){
                $thread->setImgUrl($imageUrl);
            } else {
                $thread->setImgUrl("");
            }            

            $thread->setBoardId($boardId);
            $thread->setComment(trim($post['comment']));            

            $this->threadDAO->insertThread($thread);

            return $thread;
        }

        // Get the threads on given board    
        public function getThreads($boardId){            
            $threads = $this->threadDAO->getThreads($boardId);
            
            foreach($threads as $thread){
                $replies = (array)$this->getReplyCount($thread);
                $thread->setReplies($replies["COUNT(replyId)"]);            
            }

            return $threads;
        }

        // Get thread belonging to given threadId
        public function getThread($threadId){
            $thread = $this->threadDAO->getThread($threadId);       
            return $thread;
        }

        // Get the amount of replies a thread has
        public function getReplyCount($thread){
            $replies = $this->threadDAO->getReplyCount($thread);
            return $replies;
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
                $uploadOk = 0;
            }

            // Check file size
            if ($image["size"] > 5000000) {
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
            // if everything is ok, try to upload file
                return "";
            } else {
                // Generate random name for image
                $targetFile = $targetDir . basename($newImageName) . "." . end($imageExtension);
                $url = basename($newImageName) . "." . end($imageExtension);
                if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                    return $url;                    
                } else {
                    return "";
                }
            }
        }

    }
