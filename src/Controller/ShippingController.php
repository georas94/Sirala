<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShippingController extends AbstractController
{
    /**
     * @Route("/livraison", name="shipping")
     */
    public function index()
    {

        if (!empty($_POST)) {

            $name = $_POST['name'];
            $date = $_POST['date'];
            $address = $_POST['content'];
            $time = $_POST['time'];
            $gps = $_POST['latlong'];
            $phone = $_POST['phone'];

            return $this->render('shipping/confirm.html.twig',[
                'name' => $name ??null,
                'date' => $date ??null,
                'address' => $address ??null,
                'time' => $time ??null,
                'gps' => $gps ??null,
                'phone' => $phone ??null,
            ]);
        }

        return $this->render('shipping/index.html.twig', [

        ]);
    }
    
    /**
     * @Route("/validation", name="confirm_shipping")
     */
    public function confirm_shipping()
    {
        return $this->render('shipping/confirm.html.twig', [
            
        ]);
    }
}
