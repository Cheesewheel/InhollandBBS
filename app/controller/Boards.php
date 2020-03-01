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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
            $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);

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
                $thread = $this->threadModel->createThread($post, $files, $boardId);                
            }

            // Get the threads for this board
            $threads = $this->threadModel->getThreads($boardId);
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
                $reply = $this->replyModel->createReply($post, $files, $threadId);               
            }

            $thread = $this->threadModel->getThread($threadId);
            $replies = $this->replyModel->getReplies($threadId);
            
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
              
        // Delete reply
        public function deleteReply($replyId){

        }

        
    }