<?php

namespace Wmd\premierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LaboController extends Controller
{
	/**
     * @Route("/chemin1/")
     */
    public function helloWorldAction()
    {
        return $this->render('WmdpremierBundle:LaboController:helloWorld.html.twig', array(
                // ...
            ));    }
	
	/**
     * @Route("/chemin2/{name}")
     */
    public function helloNameAction()
    {
        return $this->render('WmdpremierBundle:LaboController:helloName.html.twig', array(
                // ...
            ));    }

}
