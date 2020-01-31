<?php  
    class Boards extends Controller {
        public function __construct(){
            $this->threadDAO = $this->dal('ThreadDAO');
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

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;                
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/ict/ - Informatica',
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

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/pabo/ - PABO',
                'threads' => $threads,
                'subjectError' => ''
            ];

            $this->view('boards/pabo', $data);
        } 

        // /trv/ - Tourism Management
        public function trv(){
           // Declare boardId
           $boardId = 3;

           // Get the threads for this board
           $threads = $this->getThreads($boardId);

           if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

           // Init data
           $data = [
               'title' => '/trv/ - Tourism Management',
               'threads' => $threads
           ];

            $this->view('boards/trv', $data);
        } 

        // /biz/ - Business Studies
        public function biz(){
            // Declare boardId
            $boardId = 4;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/biz/ - Business Studies',
                'threads' => $threads
            ];

            $this->view('boards/biz', $data);
        }
        
        // /muz/ - Muziekopleiding
        public function muz(){
            // Declare boardId
            $boardId = 5;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/muz/ - Muziek Opleiding',
                'threads' => $threads
            ];

            $this->view('boards/muz', $data);
        } 

        // /miro/ - Medical Imaging Radiation Oncology
        public function miro(){
            // Declare boardId
            $boardId = 6;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/miro/ - Medical Imaging Radiation Oncology',
                'threads' => $threads
            ];

            $this->view('boards/miro', $data);
        }

        // /b/ - Bier
        public function b(){
            // Declare boardId
            $boardId = 7;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/b/ - Bier',
                'threads' => $threads
            ];

            $this->view('boards/b', $data);
        }

        // /vg/ - Video Games
        public function vg(){
            // Declare boardId
            $boardId = 8;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/vg/ - Video Games',
                'threads' => $threads
            ];

            $this->view('boards/vg', $data);
        }

        // /x/ - Toetsen & Antwoorden
        public function x(){
            // Declare boardId
            $boardId = 9;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/x/ - Toetsen & Antwoorden',
                'threads' => $threads
            ];

            $this->view('boards/x', $data);
        }

        // /net/ - Netwerk
        public function net(){
            // Declare boardId
            $boardId = 10;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/net/ - Netwerk',
                'threads' => $threads
            ];

            $this->view('boards/net', $data);
        }

        // /s/ - Stickers
        public function s(){
            // Declare boardId
            $boardId = 11;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                // Put $_POST and $_FILES in variables
                $post = $_POST;
                $files = $_FILES;
                
                // Call method to create thread
                $thread = $this->createThread($post, $files, $boardId);                
            }

            // Init data
            $data = [
                'title' => '/s/ - Stickers',
                'threads' => $threads
            ];

            $this->view('boards/s', $data);
        }

        // Threadviewer
        public function threadViewer(){
            // Sanitize the threadId if provided
            if(isset($_GET['thread'])){
                $threadId = trim(filter_var($_GET['thread'], FILTER_SANITIZE_STRING));
            } else {
                die('kut');
            }

            $thread = $this->getThread($threadId);
            
            // Init data
            $data = [
                'title' => 'Threadviewer',
                'thread' => $thread
            ];

            $this->view('boards/threadViewer', $data);
        }

    // Methods
        // Display the given threads
        public function displayThreads($threads){
            foreach($threads as $thread){
                echo '
                <div class="thread"> 
                    <div class="OP" class="post">
                        <img class="image" alt="image" src="'.URLROOT.'/img/threads/'.$thread->getImgUrl().'"></img>
                        <span class="opHeader" class="postId"> No.' . $thread->getThreadId() .'<span>
                        <span class="opHeader" class="postSubject">' . $thread->getSubject() . '<span>
                        <span class="opHeader" class="posterName">' . $thread->getStudentNumber() . '</span>
                        <span class="opHeader" class="postDateTime">' . $thread->getTimeCreated() . '</span>
                        <span class="opHeader" class="postDateTime">Replies: ' .  $thread->getReplies()  . '</span>
                        <a class="opHeader" class="viewThread" href="' . URLROOT . '/boards/threadviewer?thread=' . $thread->getThreadId()  . '">View</a>
                        <br>
                        <p>' . $thread->getComment() . '</p>
                    </div>
                </div>
                ';
            }
        }

        // Display given thread
        public function displayThread($thread){
            echo '
            <div class="thread"> 
                <div class="OP" class="post">
                    <img class="image" alt="image" src="'.URLROOT.'/img/threads/'.$thread->getImgUrl().'"></img>
                    <span class="opHeader" class="postId"> No.' . $thread->getThreadId() .'<span>
                    <span class="opHeader" class="postSubject">' . $thread->getSubject() . '<span>
                    <span class="opHeader" class="posterName">' . $thread->getStudentNumber() . '</span>
                    <span class="opHeader" class="postDateTime">' . $thread->getTimeCreated() . '</span>
                    <br>
                    <p>' . $thread->getComment() . '</p>
                </div>
            </div>
            ';            
        }
        
        // Get the threads on given board    
        public function getThreads($boardId){
            $threads = $this->threadDAO->getThreads($boardId);

            foreach($threads as $thread){
                $replies = (array)$this->getReplyCount($thread);
                $thread->setReplies($replies["COUNT(postId)"]);            
            }

            return $threads;
        }
        
        // Get thread belonging to given threadId
        public function getThread($threadId){
            $thread = $this->threadDAO->getThread($threadId);       
            return $thread;
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
            $thread->setComment(trim($_POST['comment']));            

            $this->threadDAO->insertThread($thread);
            
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