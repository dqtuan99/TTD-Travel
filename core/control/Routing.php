<?php
    namespace core\control;
    
    class Routing {
    	public function __construct() {}
        public function proc() { //echo "def"; exit();
             //URI co dang index.php/module/controller/action/p1/p2/p3
             $moduleName = "fallback";
             $controllerName = "fallback";
             $actionName = "proc";
             $parameters = "";
             
            //phan tich URI de lay ten module, controller va action cung cac parameters
             $requestURI = explode('/', strtolower($_SERVER['REQUEST_URI']));
             $scriptName = explode('/', strtolower($_SERVER['SCRIPT_NAME']));
             $commandArray = array_diff_assoc($requestURI, $scriptName);
             $commandArray = array_values($commandArray);
             
             if (count($commandArray) > 0) $moduleName = $commandArray[0];
             if (count($commandArray) > 1) $controllerName = $commandArray[1];
             if (count($commandArray) > 2) $actionName = $commandArray[2];
             if (count($commandArray) > 3) $parameters = array_slice($commandArray, 3);

                          
             //kiem tra co controller
             $filename = $moduleName."/control/".ucfirst($controllerName).".php";
     //        echo              $filename;
             if(!file_exists($filename)) {
                   $moduleName = "fallback";
                   $controllerName = "fallback";
                   $actionName = "proc";  
             }
             
             if ($moduleName == "") $moduleName = "fallback";
             if ($controllerName == "") $controllerName = "fallback";
             if ($actionName == "") $actionName = "proc";
               
             $ret = array();
             $ret["moduleName"]  = $moduleName;
             $ret["controllerName"]  = $controllerName;
             $ret["actionName"]  = $actionName;
             $ret["parameters"]  = $parameters;
             
             return $ret;
        }
    }
