<?php  
    class Boards extends Controller {
        public function __construct(){
            $this->threadDAO = $this->dal('ThreadDAO');
            $this->threadModel = $this->model('ThreadModel');
        }

        public function index(){
            $data = [
                'title' => 'Welcome'
            ];

            $this->view('pages/index', $data);
        }

        public function ict(){
            // Declare boardId
            $boardId = 1;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/ict/ - Informatica',
                'threads' => $threads
            ];

            

            $this->view('boards/ict', $data);
        }
        
        public function pabo(){
            // Declare boardId
            $boardId = 2;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/pabo/ - PABO',
                'threads' => $threads
            ];

            $this->view('boards/pabo', $data);
        } 

        public function trv(){
           // Declare boardId
           $boardId = 3;

           // Get the threads for this board
           $threads = $this->getThreads($boardId);

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
               $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

               // Init data
               $thread = new ThreadModel();
               $thread->setSubject(trim($_POST['subject']));
               $thread->setUserId($_SESSION['userId']);
               $thread->setImgUrl(trim("img.jpg"));
               $thread->setBoardId($boardId);
               $thread->setComment(trim($_POST['comment']));

               $this->createThread($thread);
               
           }

           // Init data
           $data = [
               'title' => '/trv/ - Tourism Management',
               'threads' => $threads
           ];

            $this->view('boards/trv', $data);
        } 

        public function biz(){
            // Declare boardId
            $boardId = 4;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/biz/ - Business Studies',
                'threads' => $threads
            ];

            $this->view('boards/biz', $data);
        }
        
        public function muz(){
            // Declare boardId
            $boardId = 5;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/muz/ - Muziek Opleiding',
                'threads' => $threads
            ];

            $this->view('boards/muz', $data);
        } 

        public function miro(){
            // Declare boardId
            $boardId = 6;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/miro/ - Medical Imaging Radiation Oncology',
                'threads' => $threads
            ];

            $this->view('boards/miro', $data);
        }

        public function b(){
            // Declare boardId
            $boardId = 7;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/b/ - Bier',
                'threads' => $threads
            ];

            $this->view('boards/b', $data);
        }

        public function vg(){
            // Declare boardId
            $boardId = 8;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/vg/ - Video Games',
                'threads' => $threads
            ];

            $this->view('boards/vg', $data);
        }

        public function x(){
            // Declare boardId
            $boardId = 9;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/x/ - Toetsen & Antwoorden',
                'threads' => $threads
            ];

            $this->view('boards/x', $data);
        }

        public function net(){
            // Declare boardId
            $boardId = 10;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/net/ - Netwerk',
                'threads' => $threads
            ];

            $this->view('boards/net', $data);
        }

        public function s(){
            // Declare boardId
            $boardId = 11;

            // Get the threads for this board
            $threads = $this->getThreads($boardId);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $thread = new ThreadModel();
                $thread->setSubject(trim($_POST['subject']));
                $thread->setUserId($_SESSION['userId']);
                $thread->setImgUrl(trim("img.jpg"));
                $thread->setBoardId($boardId);
                $thread->setComment(trim($_POST['comment']));

                $this->createThread($thread);
                
            }

            // Init data
            $data = [
                'title' => '/s/ - Stickers',
                'threads' => $threads
            ];

            $this->view('boards/s', $data);
        }

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
                        <a class="opHeader" class="viewThread" href="">View</a>
                        <br>
                        <p>' . $thread->getComment() . '</p>
                    </div>
                </div>
                ';
            }
        }
       
        public function getThreads($boardId){
            $threads = $this->threadDAO->getThreads($boardId);

            foreach($threads as $thread){
                $replies = (array)$this->getReplyCount($thread);
                $thread->setReplies($replies["COUNT(postId)"]);            
            }

            return $threads;
        }

        public function createThread($thread){
            $this->threadDAO->insertThread($thread);
        }

        public function getReplyCount($thread){
            $replies = $this->threadDAO->getReplyCount($thread);
            return $replies;
        }
    }