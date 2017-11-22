<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * Lists all advert entities.
     *
     * @Route("/", name="index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $user = $this->getUser();

        if ($user == null){
            //return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $em = $this->getDoctrine()->getManager();

        $adverts = $em->getRepository('AdvertBundle:Advert')->findAll();

        return $this->render('AdvertBundle:Advert:index.html.twig', array(
            'adverts' => $adverts,
        ));
    }


    /**
     * Lists all advert entities.
     *
     * @Route("/home", name="home")
     * @Method("GET")
     */
    public function homeAction()
    {
        return $this->render('AdvertBundle:Default:index.html.twig');
    }


}
