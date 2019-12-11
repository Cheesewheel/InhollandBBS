<?php  
    class Boards extends Controller {
        public function __construct(){
            
        }

        public function index(){
            $data = [
                'title' => 'Welcome'
            ];

            $this->view('pages/index', $data);
        }

        public function ict(){
            $data = [
                'title' => '/ict/ - Informatica'
            ];

            $this->view('boards/ict', $data);
        }
        
        public function pabo(){
            $data = [
                'title' => '/pabo/ - PABO'
            ];

            $this->view('boards/pabo', $data);
        } 

        public function trv(){
            $data = [
                'title' => '/trv/ - Tourism Management'
            ];

            $this->view('boards/trv', $data);
        } 

        public function biz(){
            $data = [
                'title' => '/biz/ - Business Studies'
            ];

            $this->view('boards/biz', $data);
        }
        
        public function muz(){
            $data = [
                'title' => '/muz/ - Muziekopleiding'
            ];

            $this->view('boards/muz', $data);
        } 

        public function miro(){
            $data = [
                'title' => '/miro/ - Imaging Radiation Oncology'
            ];

            $this->view('boards/miro', $data);
        }
        
        public function vg(){
            $data = [
                'title' => '/vg/ - Video Games'
            ];

            $this->view('boards/vg', $data);
        }

        public function b(){
            $data = [
                'title' => '/b/ - Bier'
            ];

            $this->view('boards/b', $data);
        }

        public function x(){
            $data = [
                'title' => '/x/ - Antwoorden & Toetsen'
            ];

            $this->view('boards/x', $data);
        }

        public function net(){
            $data = [
                'title' => '/net/ - Netwerk'
            ];

            $this->view('boards/net', $data);
        }

        public function s(){
            $data = [
                'title' => '/s/ - Stickers'
            ];

            $this->view('boards/s', $data);
        }

        public function new(){
            $data = [
                'title' => '/new/ - Nieuws'
            ];

            $this->view('boards/new', $data);
        }        
    }