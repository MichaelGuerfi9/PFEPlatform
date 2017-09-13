<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }



    /**
     * @Route("/profil")
     */
    public function profilAction()
    {


        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('fos_user_security_login');
        }

        $em = $this->getDoctrine()->getManager();

        //$matters = $em->getRepository('UserBundle:matter')->findAll();



        return $this->render('UserBundle:Default:index.html.twig');
    }


}
