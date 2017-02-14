<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/envoi", name="envoi")
     */
    public function envoiMessage(Request $request)
    {
        $texte=$this->get(Input::class, );
        $this->handleRequest($request);
        echo ($texte);
    }
}
