<?php

namespace AdvertBundle\Controller;

use AdvertBundle\Entity\Advert;
use AdvertBundle\Entity\Expertise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Advert controller.
 *
 */
class ExpertiseController extends Controller
{


    /**
     * @Route("/askExpertise/{id}", name="ask_expertise")
     * @Method("GET")
     */
    public function askAction(Advert $advert)
    {

        $user = $this->getUser();

        if (!$user || !$advert->getReservedBy()) {
            echo 'user or advert error';
            die;
        }

        if ($advert->getReservedBy()->getId() != $user->getId()) {
            echo "user doesn't have reserved this car";
            die;
        }

        if ($advert->getExpertise()) {
            echo "already ask a expertise";
            die;
        }

        $expertise = new Expertise();

        $advert->setExpertise($expertise);
        $expertise->setAdvert($advert);
        $expertise->setStatus("ask");

        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->persist($expertise);
        $em->flush();
        return $this->redirectToRoute('advert_show', array('id' => $advert->getId()));

    }

    /**
     * @Route("/myExpertise/{id}", name="my_expertise")
     * @Method("GET")
     */
    public function myExpertiseAction(Expertise $expertise)
    {

        $advert = $expertise->getAdvert();

        return $this->render('AdvertBundle:Expertise:show.html.twig', array(
            'expertise' => $expertise,
            'advert' => $advert,
        ));

    }
}
