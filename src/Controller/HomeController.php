<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        
        return $this->render('home/index.html.twig', [

        ]);
    }
    
    /**
     * @Route("/locate", name="locate")
     */
    public function locate()
    {
        
        

        return $this->render('home/locate.html.twig', [

        ]);
    }
}

