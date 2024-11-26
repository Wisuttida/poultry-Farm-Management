<?php
    $controllers = array('pages'=>['error','resetPassword','update']);

    function call($controller,$action){
        require("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": 
                        require("models/usersModel.php");
                        $controller_obj = new PageController();
                        break;
        }
        $controller_obj->{$action}();
    }

    if(array_key_exists($controller,$controllers)){
        if(in_array($action,$controllers[$controller])){
            call($controller,$action);
        }else{
            call('pages','error');
        }
    }else{
        call('pages','error');
    }
?>