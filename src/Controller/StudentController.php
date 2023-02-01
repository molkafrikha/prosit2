<?php 

namespace App\Controller ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class StudentController extends AbstractController 
{
    /** 
     * @return Response 
    * @Route("/affiche", name:"app_index")
   */
    public function Affiche():Response  {
    return new Response('Bonjour mes etudiants');
    }

    
    public function __construct() {
    }
}


?>