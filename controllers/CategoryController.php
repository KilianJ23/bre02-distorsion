<?php

class CategoryController {
    
    private CategoryManager $cm;
    
    public function __construct(){
        $this->cm = new CategoryManager();
    }
    
    public function getCategories() : void{
        $categories = $this->cm->findAllCategories();
        $template = "get_categories";
        require "./templates/layout.phtml";
    }
    
    public function getCategory() : void {
        
    }
}



?>