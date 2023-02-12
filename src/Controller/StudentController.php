<?php 

namespace App\Controller ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class StudentController extends AbstractController 
{
    #[Route('/index', name: 'index')]
    public function index():Response  {
    return new Response('Bonjour mes etudiants');
    }

    
    public function __construct() {
    }


    #[Route('/ex2', name: 'ex2')]
    public function Affiche2()
    {$listTableau = array(
        array('ref' => 'form147', 'Titre' => 'Formation Symfony 4','Description'=>'formation pratique',
            'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020', 'nb_participants'=>19) ,
        array('ref'=>'form177','Titre'=>'Formation SOA' ,
            'Description'=>'formation theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
            'nb_participants'=>0),
        array('ref'=>'form178','Titre'=>'Formation Angular' ,
            'Description'=>'formation theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
            'nb_participants'=>12)

    );
       


        return $this->render('teacher/list.html.twig',[
            'controller_name' => 'StudentController', 'listeTableau'=> $listTableau
        ]);
    }

     
    #[Route('/detail/{id}', name: 'detail')]
     
  
    public function detail($id)
    {return $this->render('club/detail.html.twig', [
            'controller_name' => 'ClubController','nom'=>$id
        ]);
    }
}


?>