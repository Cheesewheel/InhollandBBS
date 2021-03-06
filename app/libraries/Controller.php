<?php   
    /*Base Controller
    * Loads the models and views
    */

    class Controller {
        // Load DAL
    public function dal($dal){
        // Require dal file
        require_once '../app/DAL/' . $dal . '.php';
  
        // Instatiate dal
        return new $dal();
      }

        //Load model
        public function model($model){
            //Require model file
            require_once '../app/model/' . $model . '.php';

            //Instantiate model
            return new $model();
        }

        //Load view
        public function view($view, $data = []){
            //Check for view file
            if(file_exists('../app/view/' . $view . '.php')){
                require_once '../app/view/' . $view . '.php';
            } else {
                //View does not exist
                die('Pagina niet gevonden');
            }
        }
    }