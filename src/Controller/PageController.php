<?php 
namespace App\Controller;

class PageController extends Controller 
{

    public function home(): void
    {  
        $gretting = "Hello"; 
        $name = "Jhon"; 
    
        $this->render("page/home", [
            "grettings" => $gretting,
            "name" => $name,
        
        ]);
    
    }
    public function about(): void
    {
        
        $this->render("page/about");
    
    }
    




}