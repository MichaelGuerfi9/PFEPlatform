<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{

    /**
     * @Route("/somePoints", name="somePoints")
     * @Method("GET")
     */
    public function indexAction()
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


}
