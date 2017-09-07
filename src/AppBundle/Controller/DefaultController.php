<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/s", name="homepage_default")
     */
    public function hindexAction(Request $request)
    {
      return $this->render('todo/index.html.twig');
    }
    
     
}
