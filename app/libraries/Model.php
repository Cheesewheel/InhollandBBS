<?php   
    /*Base Model
    * Loads the models and views
    */

    class Model {
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
    }