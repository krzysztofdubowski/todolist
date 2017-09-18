<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Kontrahent;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontaktAction(Request $request)
    {
        $uri=$request->getHost();
        $knt = new \AppBundle\Entity\Kontrahent();
        $knt-> SetNazwa($uri);
        $knt->SetTelefon("602603138");
        $knt->SetAdres("Ken 40/23 Białystok");
       
        // replace this example code with whatever you need
        return $this->render('default/kontakt.html.twig',array (
            'nazwa'=>$knt , 'uri'=>$uri , 'request'=>$request
        ));
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction (Request $request)
    {
            // replace this example code with whatever you need
        return $this->render('default/admin.html.twig');
      
    }
    
    /**
     * @Route("/login", name="login")
     */
    public function loginAction (Request $request)
    {
            // replace this example code with whatever you need
        return $this->render('default/logowanie.html.twig');
      
    }
}
