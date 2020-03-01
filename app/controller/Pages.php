<?php  
    class Pages extends Controller {
        public function __construct(){
            $this->searchDAO = $this->dal('SearchDAO');
        }

        public function index(){
            $data = [
                'title' => 'Welcome'
            ];

            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About InHollandBBS'
            ];

            $this->view('pages/about', $data);
        }

        public function search(){
            // Check the $_GET and sanitize 
            if((isset($_GET['s'])) && (isset($_GET['searchColumn']))){  
                // Make sure captcha correctly filled in
                if(!empty($_GET['g-recaptcha-response'])){                    
                    // Get the captcha response
                    $captcha=$_GET['g-recaptcha-response'];

                    // Secret captcha key
                    $secretKey = "6LfQ2dMUAAAAAPaFBz5KSd3Cjgj2PASgprn9_c3H";

                    // Get IP
                    $ip = $_SERVER['REMOTE_ADDR'];

                    // Post request to server
                    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                    $response = file_get_contents($url);
                    $responseKeys = json_decode($response,true);
                    
                    // Put $_GET in variable
                    $searchValue = trim(filter_var($_GET['s'], FILTER_SANITIZE_STRING));
                    $searchColumn = trim(filter_var($_GET['searchColumn'], FILTER_SANITIZE_STRING));
                    
                    // Get the search results
                    $results = $this->searchDAO->search($searchValue, $searchColumn);
                       
                    $data = [
                        'title' => 'Search',
                        'captchaError' => '',
                        'results' => $results
                    ];

                    $this->view('pages/search', $data);

                }else{
                    $data = [
                        'title' => 'Search',
                        'captchaError' => 'Please complete the captcha. No robots allowed'
                    ];

                    $this->view('pages/search', $data);
                }
            }

            $data = [
                'title' => 'Search',
            ];

            $this->view('pages/search', $data);
        }
    }