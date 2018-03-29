<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{

    /**
     * @Route("/somePoints", name="somePoints")
     * @Method("GET")
     */
    public function somePointsAction()
    {

        return $this->render('AppBundle::somePoints.html.twig');
    }


    /**
     * @Route("/aPropos", name="aPropos")
     */
    public function aProposAction()
    {

        return $this->render('AppBundle::aPropos.html.twig');
    }

    /**
     * @Route("/expres-livreur", name="expresLivreur")
     */
    public function expresLivreurAction()
    {

        return $this->render('AppBundle::expresLivreur.html.twig');
    }

    /**
     * @Route("/expres-livreur2", name="expresLivreur2")
     */
    public function expresLivreur2Action()
    {

        return $this->render('AppBundle::expresLivreur2.html.twig');
    }

    /**
     * @Route("/contactMe", name="contactMe")
     */
    /*public function contactMeAction(\Swift_Mailer $mailer){*/
    public function contactMeAction(\Swift_Mailer $mailer){

        // Check for empty fields
        if(empty($_POST['name'])      ||
            empty($_POST['email'])     ||
            empty($_POST['phone'])     ||
            empty($_POST['message'])   ||
            !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
            echo "No arguments Provided!";
            $response = new Response();
            $response->setStatusCode(400);

            return $response;

        }

        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $phone = strip_tags(htmlspecialchars($_POST['phone']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
        $to = 'brandin.julien@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Website Contact Form:  $name";
        $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: brandin.julien@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Reply-To: $email_address";
        mail($to,$email_subject,$email_body,$headers);



/*

        $message = (new \Swift_Message("Website Contact Form:  $name"))
            ->setFrom('send@example.com')
            ->setTo('brandin.julien@gmail.com')
            ->setBody(
                $email_body
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            //
        ;

        $mailer->send($message);

*/




        $response = new Response();
        $response->setStatusCode(200);

        return $response;

    }


}
