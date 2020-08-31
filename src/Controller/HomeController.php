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
        // Find your Account Sid and Auth Token at twilio.com/console
        // DANGER! This is insecure. See http://twil.io/secure
        // $sid    = "AC75b82af7e75221e579323f53b1dda239";
        // $token  = "8a7a3854e4cf174c8e58527ae91542ce";
        // $twilio = new Client($sid, $token);
        
        // $message = $twilio->messages
        //                 ->create("whatsapp:+33627880144", // to
        //                         [
        //                             "from" => "whatsapp:+14155238886",
        //                             "body" => "Pour recevoir votre commande, veuillez nous envoyer votre adresse !"
        //                         ]
        //                 );
        
        // print($message->content);


        // Find your Account Sid and Auth Token at twilio.com/console
        // DANGER! This is insecure. See http://twil.io/secure
        // $sid    = "AC75b82af7e75221e579323f53b1dda239";
        // $token  = "8a7a3854e4cf174c8e58527ae91542ce";
        // $twilio = new Client($sid, $token);

        // $messages = $twilio->messages
        //                 ->read([], 20);
        // $counter = null;
        // foreach ($messages as $record) {

        //     if ($counter == 0 ) {
        //       $lastId =  $record->sid;
        //     }

        //     $counter = $counter +1;
            
        // }

        // $lastMessage = $twilio->messages($lastId)
        //           ->fetch();

        // echo '<pre>',var_dump($lastMessage->body), '</pre>';

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

