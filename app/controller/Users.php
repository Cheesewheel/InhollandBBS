<?php
    class Users EXTENDS Controller{
        public function __construct(){
            $this->userModel = $this->model('UserModel');
            $this->userDAO = $this->dal('UserDAO');
            $this->tokenDAO = $this->dal('TokenDAO');
        }
    
    // Webpages
        // User registration
        public function register(){
            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form

                // Sanitize POST data and determine validation regex
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $passwordValidation = "/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";
                $nameValidation = "/^[a-zA-Z ]*$/";
                $studentNumberValidation = "^[0-9]{1,6}$^";


                // Init data
                $user = new UserModel();
                $user->setName(trim($_POST['name']));
                $user->setLastName(trim($_POST['lastName']));
                $user->setStudentNumber($_POST['studentNumber']);
                $user->setEmail(trim(($_POST['email'])));               
                $user->setPassword(trim($_POST['password']));
                $user->setPasswordConfirm(trim($_POST['passwordConfirm']));

                $data = [
                    'nameError' => '',
                    'lastNameError' => '',
                    'emailError' => '',
                    'studentNumberError' => '',
                    'passwordError' => '',
                    'passwordConfirmError' => '',
                    'captchaError' => ''
                ];

                // Validate email not empty
                if(empty($user->getEmail())){
                    $data['emailError'] = 'Please enter email';
                }else {
                    // Check if email already exists
                    if($this->userDAO->findUserByEmail($user->getEmail())){
                        $data['emailError'] = 'Email is already taken';
                    }
                }

                // Validate Name not empty
                if(empty($user->getName())){
                    $data['nameError'] = 'Please enter name';
                } elseif(!preg_match($nameValidation, $user->getName())){
                    $data['nameError'] = 'Name can only contain letters and whitespace';
                }

                // Validate lastName not empty
                if(empty($user->getLastName())){
                    $data['lastNameError'] = 'Please enter last name';
                } elseif(!preg_match($nameValidation, $user->getLastName())){
                    $data['lastNameError'] = 'Name can only contain letters and whitespace';
                }

                // Validate studentNumber not empty
                if(empty($user->getstudentNumber())){
                    $data['studentNumberError'] = 'Please enter student number';
                } elseif($this->userDAO->findUserByStudentNumber($user->getStudentNumber())){
                    $data['studentNumberError'] = 'Student number is already taken';
                } elseif(!preg_match($studentNumberValidation, $user->getstudentNumber())){
                    $data['studentNumberError'] = 'Student number must be 6 digits';
                }
                
                // Validate Password not empty
                if(empty($user->getPassword())){
                    $data['passwordError'] = 'Please enter password';
                } elseif(strlen($user->getPassword()) < 6) {
                    $data['passwordError'] = 'Password must be at least 6 characters long';
                } elseif(!preg_match($passwordValidation, $user->getPassword())){
                    $data['passwordError'] = 'Password must have at least one numeric value, one uppercase character and one lowercase character';
                }

                 // Validate password confirmation
                 if(empty($user->getPasswordConfirm())){
                    $data['passwordConfirmError'] = 'Please confirm password';
                } else {
                    if($user->getPassword() != $user->getPasswordConfirm()){
                        $data['passwordConfirmError'] = 'Passwords do not match!';
                    }
                }

                if(!empty($_POST['g-recaptcha-response'])){
                    // Get the captcha response
                    $captcha=$_POST['g-recaptcha-response'];

                    // Secret captcha key
                    $secretKey = "6LfQ2dMUAAAAAPaFBz5KSd3Cjgj2PASgprn9_c3H";

                    // Get IP
                    $ip = $_SERVER['REMOTE_ADDR'];

                    // Post request to server
                    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                    $response = file_get_contents($url);
                    $responseKeys = json_decode($response,true);
                  }else{
                      $data['captchaError'] = 'Please complete the captcha. No robots allowed';
                  }

                // Make sure errors are empty and captcha response is success
                if(empty($data['emailError']) && empty($data['nameError']) && empty($data['studentNumberError'])&& empty($data['passwordError']) && empty($data['passwordConfirmError']) && empty($data['captchaError']) && $responseKeys["success"]){
                    // Validated

                    // Hash password
                    $user->setPassword(password_hash($user->getPassword(), PASSWORD_DEFAULT));

                    // Register user
                    if($this->userDAO->register($user)){
                        // Send verification email
                        // Create token
                        $token = $this->createToken($user->getEmail(), "verification");
                        
                        // Subject
                        $subject = "InHollandBBS User Verification";

                        // Message
                        $message = "You have registered at InHollandBBS. \n
                        Click the link below to verificate your account! \n
                        " . URLROOT . "/users/userverification?token=" . $token;

                        // Use wordwrap() if lines are longer than 70 characters
                        $message = wordwrap($message,70);                        

                        // Send email
                        mail($user->getEmail(), $subject, $message);

                        // Direct to login page
                        $this->view('users/login', $data);
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //Load view with data
                    $this->view('users/register', $data);
                }

            } else {
                //Init data
                $data = [
                    'name' => '',
                    'lastName' => '',
                    'email' => '',
                    'studentNumber' => '',
                    'password' => '',
                    'passwordConfirm' => '',
                    'nameError' => '',
                    'lastNameError' => '',
                    'studentNumberError' => '',
                    'emailError' => '',                    
                    'passwordError' => '',
                    'passwordConfirmError' => ''
                ];

                //Load ui
                $this->view('users/register', $data);
            }
        }

        // User login
        public function login(){
            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $user = new UserModel();
                $user->setEmail(trim($_POST['email']));
                $user->setPassword(trim($_POST['password']));

                // Validate email not empty
                if(empty($user->getEmail())){
                    $data['emailError'] = 'Please enter email';
                }

                // Validate Password not empty
                if(empty($user->getPassword())){
                    $data['passwordError'] = 'Please enter password';
                }

                // Check user by email
                if(!empty($user->getEmail())){
                    if($this->userDAO->findUserByEmail($user->getEmail())){
                        //User found
                    } else{
                        //User not found
                        $data['emailError'] = 'No user found!';
                        $data['passwordError'] = '';
                    }
                }

                // Make sure errors are empty
                if(empty($data['emailError']) && empty($data['passwordError'])){
                    // Validated
                    // Check and login
                    $loggedInUser = $this->userDAO->login($user);

                    if($loggedInUser){
                        // Create Session

                        $this->createUserSession($loggedInUser);

                        if($_SESSION['userType'] > 1){
                            redirect('cms/dashboard');
                        } else {
                        redirect('index');
                        }
                    } else {
                        $data['passwordError'] = 'Password incorrect';
                        $data['emailError'] = '';
                        $this->view('users/login', $data);
                    }

                } else {
                    // Load view with data
                    $this->view('users/login', $data);
                }

            } else {
                // Init data
                $data = [
                    'email' => '',
                    'password' => '',
                    'emailError' => '',
                    'passwordError' => ''
                ];

                // Load ui
                $this->view('users/login', $data);
            }
        }

        // User profile
        public function profile(){
            $params = explode('/', $_GET['url']);
            //die(var_dump($params));

            // Init data
            $data = [
                'title' => 'Forgot password?',
                'user' => ''
            ];

            $this->view('users/profile', $data);
        }

        // Forgot password
        public function forgot(){
            // Init data
            $data = [
                'title' => 'Forgot password?',
                'emailError' => ''
            ];

            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $email = trim($_POST['email']);

                // Validate email not empty
                if(empty($email)){
                    $data['emailError'] = 'Please enter email';
                }else{
                    // Check user by email
                    if($this->userDAO->findUserByEmail($email)){
                        // User found

                        // Create token
                        $token = $this->createToken($email, "forgot");
                        
                        // Subject
                        $subject = "InhollandBBS password recovery";
                        
                        // Message
                        $message = "You have requested a password recovery for your account at InhollandBBS. \n
                        Click the link below to set up a new password \n
                        " . URLROOT . "/users/newpassword?token=" . $token;                        

                        // Use wordwrap() if lines are longer than 70 characters
                        $message = wordwrap($message,70);



                        // Send email
                        mail($email, $subject, $message);

                        redirect("users/pwemailsend");

                    } else{
                        // User not found
                        $data['emailError'] = 'No user found!';
                    }
                }
            }

            // Load UI
            $this->view('users/forgot', $data);
        }

        // Password recovery email send
        public function pwEmailSend(){
            // Init data
            $data = [
                'title' => 'Password recovery email has been send'
            ];

            // Load UI
            $this->view('users/pwemailsend', $data);
        }

        // Page to submit new password 
        public function newPassword(){
            // Sanitize the token if provided
            if(isset($_GET['token'])){
                $token = trim(filter_var($_GET['token'], FILTER_SANITIZE_STRING));
            } else {
                $token = "";
            }

            // Sanitize user input and declare password validation regex
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $passwordValidation = "/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

            // Init data
            $data = [
                'title' => 'Enter new password',
                'token' => $token,
                'error' => ""
            ];

            // Check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                // Init POST data
                $password = trim($_POST['password']);
                $passwordConfirm = trim($_POST['passwordConfirmation']);

                // Validate Password not empty
                if(!empty($password) && !empty($passwordConfirm)){

                    // Validate if password is 6 characters or longer
                    if(strlen($password < 6)) {

                        // Validate if password matches contains the required characters
                        if(preg_match($passwordValidation, $password)) {

                            // Validate if password matches confirmation password
                            if($password == $passwordConfirm) {
                                // Hash password
                                $password = password_hash($password, PASSWORD_DEFAULT);

                                // Update password in datebase
                                $this->userDAO->newPassword($token, $password);
                                $this->tokenDAO->deleteToken($token);

                                // Redirect to login page
                                redirect("users/login");
                            } else {
                                $data['error'] = "Passwords don't match!";

                                //Load UI
                                $this->view('users/newpassword', $data);
                            }
                        } else {
                            $data['error'] = "Invalid password";

                            //Load UI
                            $this->view('users/newpassword', $data);
                        }
                    } else {
                        $data['error'] = "Password needs to be at least 6 characters long";

                        //Load UI
                        $this->view('users/newpassword', $data);
                    }
                } else {
                    $data['error'] = "Please enter a new password";

                    //Load UI
                    $this->view('users/newpassword', $data);
                }
            } else {
                if($this->tokenHandler($token) == "forgot"){
                } else {
                    $data['title'] = "Invalid request!";

                    //Load UI
                    $this->view('users/newpassword', $data);
                }

            }

            //Load UI
            $this->view('users/newpassword', $data);
        }

        // Page when new password is submitted
        public function pwDone(){
            //sanitize user input and declare password validation regex
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $passwordValidation = "/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";
            //Init data
            $data = [
                'title' => "You can now use  your new password",
                'token' => $token,
            ];

            //Load UI
            $this->view('users/pwdone', $data);
        }   

        // Page the verification link links to
        public function userVerification(){
            // Sanitize the token
            $token = trim(filter_var($_GET['token'], FILTER_SANITIZE_STRING));

             // Init data
             $data = [
                'title' => '',
            ];

            // Give token to token handler for processing
            if($this->tokenHandler($token) == "verification"){
                $this->userDAO->verificateUser($token);
                $this->tokenDAO->deleteToken($token);
                $data['title'] = "You are now verified";
            } else {
                $data['title'] = "Invalid request!";
            }

            //Load UI
            $this->view('users/userverification', $data);
        }        

    // Methods
        // Creates a user session
        public function createUserSession($loggedInUser){
            $_SESSION['userId'] = $loggedInUser->userId;
            $_SESSION['email'] = $loggedInUser->email;
            $_SESSION['userType'] = $loggedInUser->userType;
            $_SESSION['name'] = $loggedInUser->name;
            $_SESSION['lastName'] = $loggedInUser->lastName;
            $_SESSION['studentNumber'] = $loggedInUser->studentNumber;
            $_SESSION['verified'] = $loggedInUser->verified;
            
            redirect('pages/index');
        }

        // Logs out a user
        public function logout(){
            unset($_SESSION['userId']);
            unset($_SESSION['email']);
            unset($_SESSION['userType']);
            unset($_SESSION['name']);
            unset($_SESSION['lastName']);
            unset($_SESSION['studentNumber']);
            unset($_SESSION['verified']);
            session_destroy();
            redirect('pages/index');
        }

        // Checks if the user is logged in
        public function isLoggedIn(){
            if(isset($_SESSION['userId'])){
                return true;
            } else {
                return false;
            }
        }

        // Creates a token
        public function createToken($email, $type){
            $token = bin2hex(openssl_random_pseudo_bytes(50));
            $this->tokenDAO->insertToken($email, $token, $type);
            return $token;
        }

        // Handles tokens
        public function tokenHandler($token){
            // Check if checkTokenType in the UserDAO returns a result
            if($row = $this->tokenDAO->checkTokenType($token)){
                // Return the tokenType
                return $row->tokenType;
            }
            // If the token doesn't return a result
            else {
                return false;
            }
        }

        // Creates new password form
        public function newPasswordFormFactory($data, $token){
            echo '
                <form id="forgotForm" action="newpassword?token='.$token.'" method="POST">
                    <span>Password:</span>
                    <input type="password" name="password" placeholder="New password">
                    <span>Confirm password:</span>
                    <input type="password" name="passwordConfirmation" placeholder="Confirm password">
                    <input id="send" type="submit" value="submit">
                </form>
                <br/>
                <span class="invalidFeedback">'.$data['error'].'</span>';
        }
    }