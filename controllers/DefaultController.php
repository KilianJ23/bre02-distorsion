<?php

class DefaultController {
    
    public function __construct(){
        
    }
    
    public function home(): void {
        $template = "home";
        require "./templates/layout.phtml";
    }
    
    public function notFound(): void {
        $template = "404";
        require "./templates/layout.phtml";
    }
    
}


?>