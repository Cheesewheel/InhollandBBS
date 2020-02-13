<?php  
    class Boards extends Controller {
        public function __construct(){
            $this->threadDAO = $this->dal('ThreadDAO');
            $this->replyModel = $this->model('ReplyModel');
            $this->threadModel = $this->model('ThreadModel');
        }

    // Webpages in boards
        // Index
        public function index(){
            $data = [
                'title' => 'Welcome'
            ];

            $this->view('pages/index', $data);
        }

        // /ict/ - Informatica
        public function ict(){
            // Declare boardId
            $boardId = 1;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;                
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            

            $this->view('boards/ict', $data);
        }
        
        // /pabo/ - PABO
        public function pabo(){
            // Declare boardId
            $boardId = 2;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/pabo', $data);
        } 

        // /trv/ - Tourism Management
        public function trv(){
           // Declare boardId
           $boardId = 3;

           if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

           // Init data
           $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
           ];

            $this->view('boards/trv', $data);
        } 

        // /biz/ - Business Studies
        public function biz(){
            // Declare boardId
            $boardId = 4;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/biz', $data);
        }
        
        // /muz/ - Muziekopleiding
        public function muz(){
            // Declare boardId
            $boardId = 5;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/muz', $data);
        } 

        // /miro/ - Medical Imaging Radiation Oncology
        public function miro(){
            // Declare boardId
            $boardId = 6;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/miro', $data);
        }

        // /b/ - Bier
        public function b(){
            // Declare boardId
            $boardId = 7;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/b', $data);
        }

        // /vg/ - Video Games
        public function vg(){
            // Declare boardId
            $boardId = 8;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/vg', $data);
        }

        // /x/ - Toetsen & Antwoorden
        public function x(){
            // Declare boardId
            $boardId = 9;            

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/x', $data);
        }

        // /net/ - Netwerk
        public function net(){
            // Declare boardId
            $boardId = 10;            

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/net', $data);
        }

        // /s/ - Stickers
        public function s(){
            // Declare boardId
            $boardId = 11;            

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            // Init data
            $data = [
                'title' => $this->getBoardName($boardId),
                'threads' => $threads,
                'subjectError' => '',
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/s', $data);
        }

        // Threadviewer
        public function threadViewer(){
            // Sanitize the threadId if provided
            if(isset($_GET['thread'])){
                $threadId = trim(filter_var($_GET['thread'], FILTER_SANITIZE_STRING));
            } else {
                redirect('pages/index');
            }            

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create reply
                $reply = $this->createReply($post, $files, $threadId);               
            }

            $thread = $this->getThread($threadId);
            $replies = $this->getReplies($threadId);
            
            // Init data
            $data = [
                'title' => 'Now viewing thread no.' . $thread->getThreadId(),
                'thread' => $thread,
                'replies' => $replies,
                'commentError' => '',
                'imageError' => ''
            ];

            $this->view('boards/threadViewer', $data);
        }

    // Methods
        // Get the name of the board by boardId
        public function getBoardName($boardId){
            switch($boardId){
                case 1:
                    return "/ict/ - Informatica";
                break;

                case 2:
                    return "/pabo/ - PABO";
                break;
                
                case 3:
                    return "/trv/ - Tourism Management";
                break;

                case 4:
                    return "/biz/ - Bussiness Studies";
                break;

                case 5:
                    return "/muz/ - Muziekopleiding";
                break;

                case 6:
                    return "/miro/ - Medical Imaging Radiation Oncology";
                break;

                case 7:
                    return "/b/ - Bier";
                break;

                case 8:
                    return "/vg/ - Video Games";
                break;

                case 9:
                    return "/x/ - Toetsen & Antwoorden";
                break;

                case 10:
                    return "/net/ - Netwerk";
                break;

                case 11:
                    return "/s/ - Stickers";
                break;
            }
        }

        // Get the link to a board by boardId
        public function getBoardLink($boardId){
            switch($boardId){
                case 1:
                    return URLROOT . "/boards/ict";
                break;

                case 2:
                    return URLROOT . "/boards/pabo";
                break;
                
                case 3:
                    return URLROOT . "/boards/trv";
                break;

                case 4:
                    return URLROOT . "/boards/biz";
                break;

                case 5:
                    return URLROOT . "/boards/muz";
                break;

                case 6:
                    return URLROOT . "/boards/miro";
                break;

                case 7:
                    return URLROOT . "/boards/b";
                break;

                case 8:
                    return URLROOT . "/boards/vg";
                break;

                case 9:
                    return URLROOT . "/boards/x";
                break;

                case 10:
                    return URLROOT . "/boards/net";
                break;

                case 11:
                    return URLROOT . "/boards/s";
                break;
            }
        }

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
                            <span class="imageInfo">' . $thread->getImgUrl() . '</span><br>
                            <a href="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '" target="_blank">
                                <img class="image" alt="image" src="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '"></img>
                            </a>
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
                    $this->displayReplies($replies);
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
                    <span class="imageInfo">' . $thread->getImgUrl() . '</span><br>
                    <a href="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '" target="_blank">
                        <img class="image" alt="image" src="' . URLROOT . '/img/threads/' . $thread->getImgUrl() . '"></img>
                    </a>  
                    <br>
                    <p>' . $thread->getComment() . '</p>
                </div>
            </div>
            ';            
        }

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

        // Get the replies in given thread
        public function getReplies($threadId){
            $replies = $this->threadDAO->getReplies($threadId);
            return $replies;
        }

        // Create thread on given board
        public function createThread($post, $files, $boardId){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);            
            $imageUrl = $this->threadModel->uploadImage($files['image']);

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

        // Delete reply
        public function deleteReply($replyId){

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