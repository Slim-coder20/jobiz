<?php 
namespace App\Controller;

class PageController
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
    protected function render (string $path, array $params = []): void
    {  //var_dump($params);
        $filePath = APP_ROOTE."/templates/$path.php";
        if(!file_exists($filePath))
        {
            echo "le fichier $filePath n'existe pas !";
        }else{
            extract($params);
            require_once $filePath;
        }
       
    
    }




}