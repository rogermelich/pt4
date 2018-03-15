<?php

namespace ProvaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProvaBundle:Default:index.html.twig');
    }
    
    public function holaAction()
    {
        return $this->render('ProvaBundle:Default:hola.html.twig');
    }
    
    public function variableAction(Request $request)
    {
        return $this->render('ProvaBundle:Default:hola.html.twig', array(
            'variable' => "Aixo ve des del controlador".$request->get("variable"),
        ));
    }
    
}
