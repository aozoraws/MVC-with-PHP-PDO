<?php

class ErrorController{
    /**
     * 
     * Return view and messages for error pages.
     * 
     */
    public function index(){
        
        $data=[
            'title' =>  'ERROR',
            'data'  =>  'ABC',
        ];

        include_once('View/exception.php');
    }

}