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
     * @Route("/home", name="home")
     * @Method("GET")
     */
    public function homeAction()
    {
        return $this->render('AdvertBundle:Default:index.html.twig');
    }


}
