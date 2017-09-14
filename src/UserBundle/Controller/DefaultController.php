<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\Profil;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


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
    public function profilAction(Request $request)
    {

        $user = $this->getUser();

        if (!$user){
            return $this->redirectToRoute('fos_user_security_login');
        }

        $em = $this->getDoctrine()->getManager();

        $profil = $em->getRepository('UserBundle:Profil')->findOneByUser($user);

        if(!$profil)
            $profil = new Profil();


        $form = $this->createFormBuilder($profil)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('cellphone', TextType::class)
            ->add('adress', TextType::class)
            ->add('country', TextType::class)
            ->add('gender', TextType::class)
            ->add('city', TextType::class)
            ->add('zip_code', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Editer le profil'))
            ->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $profil = $form->getData();

            $profil->setUser($user);

            /*
            echo "<pre>";
            print_r($profil);
            echo "</pre>";
            die();
            */

            $em->persist($profil);
            $em->flush();
        }


        return $this->render('UserBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }


}
