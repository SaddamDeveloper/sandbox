<?php
    //Load Config file
    require_once '../app/config/config.php';

    require_once '../app/libraries/core.php';
    require_once '../app/libraries/controller.php';

    spl_autoload_register(function ($className){
        require_once '../app/libraries/'.$className.'.php';
    });