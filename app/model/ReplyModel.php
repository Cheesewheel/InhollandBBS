<?php
    class ReplyModel EXTENDS Model {
        private $threadId;
        private $replyId;
        private $timeCreated;
        private $userId;
        private $studentNumber;
        private $imgUrl;
        private $comment;

        public function __construct(){
            $this->threadDAO = $this->dal('ThreadDAO');
        }
    
    // Getters and setters
        //Get and Set for threadId
        public function setThreadId($threadId){
            $this->threadId = $threadId;
        }
        public function getThreadId(){
            return $this->threadId;
        }

        //Get and Set for replyId
        public function setReplyId($replyId){
            $this->replyId = $replyId;
        }
        public function getReplyId(){
            return $this->replyId;
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

    
    // Methods
        // Create reply in given thread
        public function createReply($post, $files, $threadId){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $reply = new ReplyModel();

            if($files['image']['size'] > 0){
                //die(var_dump($files['image']['size']));
                $imageUrl = $this->uploadImage($files['image']);
                $reply->setImgUrl($imageUrl);
            } else{
                //die('sneed');
                $reply->setImgUrl("");
            }
            

            // Init data
            $reply->setUserId($_SESSION['userId']);                 
            $reply->setThreadId($threadId);
            $reply->setComment(trim($post['comment'])); 

            // Insert reply and update latestReply in threads table
            $this->threadDAO->insertReply($reply);
            $this->threadDAO->updateLatestReply($reply->getThreadId());

            return $reply;
        }  

        // Display the replies in a thread
        public function displayReplies($replies){
            foreach($replies as $reply){
                echo '
                <div class="post" id="' . $reply->getReplyId() . '">                                        
                        <div class="opHeader">
                            <span class="posterName">' . $reply->getStudentNumber() . '</span>
                            <span class="postDateTime">' . $reply->getTimeCreated() . '</span>
                            <span class="postId">Reply.' . $reply->getReplyId() .'<span>
                        </div>
                        '. (!empty($reply->getImgUrl()) 
                        ?   '<span class="imageInfo">' . $reply->getImgUrl() . '</span><br>
                            <a href="' . URLROOT . '/img/threads/' . $reply->getImgUrl() . '" target="_blank">
                                <img class="image" alt="image" src="' . URLROOT . '/img/threads/' . $reply->getImgUrl() . '"></img>
                            </a>' 
                        : '') . '
                    <br>
                    <p>' . $reply->getComment() . '</p>
                </div>
                ';
            }
        }

        // Get the replies in given thread
        public function getReplies($threadId){
            $replies = $this->threadDAO->getReplies($threadId);
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
