<?php  
    //Load config
    require_once 'config/config.php';

     //Load helpers
     require_once 'helpers/sessionHelper.php';
     require_once 'helpers/urlHelper.php';

    //Autoload Core Libraries
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });

    