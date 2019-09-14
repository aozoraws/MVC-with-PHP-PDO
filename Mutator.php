<?php
class Mutator{
    public function MutateGET($uri){
        $old = $uri;
        // preg_replace("?", '', $uri);
        $variable = strstr($uri, '?', true) ?: $uri;
        $pieces = explode("/", $variable);

        if (!isset($pieces[1]) || $pieces[1]=="") {
            $pieces[1] = "index";
        }

        if (!isset($pieces[2])) {
            $pieces[2] = "index";
        }
        include_once("Controller/".$pieces[1]."Controller.php");
        if (method_exists($pieces[1].'Controller', $pieces[2]) && is_callable(array($pieces[1].'Controller', $pieces[2]))){
            if (isset($pieces[3])) {
                call_user_func(
                    array($pieces[1].'Controller', $pieces[2]),
                    $pieces[3]
                );
            }else{
                call_user_func(
                    array($pieces[1].'Controller', $pieces[2]),
                );
            }
        }else{
            http_response_code(404);
            header('Location:/error');
        }
    }
    
    public function MutatePOST($uri){
        $pieces = explode("/", $uri);

        if (!isset($pieces[1]) || $pieces[1]=="") {
            $pieces[1] = "index";
        }

        if (!isset($pieces[2])) {
            $pieces[2] = "index";
        }

        include_once("Controller/".$pieces[1]."Controller.php");
        if (method_exists($pieces[1].'Controller', $pieces[2]) && is_callable(array($pieces[1].'Controller', $pieces[2]))){
            // $id
            call_user_func(
                array($pieces[1].'Controller', $pieces[2])
            );
        }else{
            http_response_code(404);
            header('Location:/error');
        }
    }
}