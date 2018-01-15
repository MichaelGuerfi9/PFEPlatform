<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Acl\Exception\Exception;
use UserBundle\Entity\Profil;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AdvertBundle\Entity\Advert;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function becomeExpertAction($userId){


        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('UserBundle:User')->find($userId);

        $user->addRole('ROLE_EXPERT');

        return $this->render('UserBundle:Default:expertIndex.html.twig',array('user'=>$user));
    }

    /**
     * @Route("/profil", name="myProfile")
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
            //->add('password', PasswordType::class)
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


    /**
     * @Route("/advertToFavorite/{id}", name="advertToFavorite")
     * @Method("GET")
     */
    public function favoriteAdvert(Advert $advert){

        $user = $this->getUser();



        if ($user == null){
            return $this->redirectToRoute('fos_user_security_login');
        }

        $em = $this->getDoctrine()->getManager();

        $userAdvet = $user->getFavoriteAdvert();

        $add = false;

        foreach ($userAdvet as $a) {

            if ($a == $advert){
                $add = false;
                break;
            }
        }

        if ($add)
            $user->addFavoriteAdvert($advert);
        else
            $user->removeFavoriteAdvert($advert);

        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('advert_index');

        /*
        echo "<pre>";
        var_dump($user);
        echo "</pre>";
        die();
        */

    }

    /**
     *
     * @Route("/mon-espace", name="monEspace")
     * @Method("GET")
     */
    public function monEspaceAction(Request $request)
    {

        $user = $this->getUser();

        if ($user == null){
            die;
        }

        $profil = $user->getProfil();


        $form = $this->createFormBuilder($profil)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('cellphone', TextType::class)
            ->add('adress', TextType::class)
            ->add('country', TextType::class)
            ->add('gender', TextType::class)
            ->add('city', TextType::class)
            ->add('zip_code', TextType::class)
            //->add('password', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Editer le profil'))
            ->getForm();

        $form->handleRequest($request);

        //$form = $this->createForm('UserBundle\Form\UserType', $user);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository('AdvertBundle:Advert')->findOneByReservedBy($user);
        $adverts = $em->getRepository('AdvertBundle:Advert')->findByReservedBy($user);

        return $this->render('UserBundle:Default:monEspace.html.twig',array(
            'adverts'=> $adverts,
            'advert'=> $advert,
        ));
    }

    /**
     *
     * @Route("/mon-espace/expertise", name="monEspaceExpertise")
     * @Method("GET")
     */
    public function monEspaceExpertiseAction()
    {

        $user = $this->getUser();

        if ($user == null){
            die;
        }

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && !$this->get('security.authorization_checker')->isGranted('ROLE_EXPERT')) {
            die;
        }

        $em = $this->getDoctrine()->getManager();

        $allAskedExpertises = $em->getRepository('AdvertBundle:Expertise')->findByStatus("ask");
        $allAcceptedExpertises = $em->getRepository('AdvertBundle:Expertise')->findBy(array(
                'status' =>'accepted',
                'expertisedBy' => $user
            )
        );

        return $this->render('UserBundle:Default:monEspaceExpertise.html.twig',array(
            'allAskedExpertises'=> $allAskedExpertises,
            'allAcceptedExpertises'=> $allAcceptedExpertises,
        ));
    }


    /**
     *
     * @Route("/mesAchats", name="mesAchats")
     * @Method("GET")
     */
    public function mesAchatsAction()
    {

        $user = $this->getUser();

        if ($user == null){
            die;
        }

        $em = $this->getDoctrine()->getManager();

        $buyings = $em->getRepository('UserBundle:Buying')->findBy(array(
                'user' => $user
            )
        );

        return $this->render('UserBundle:Default:monEspaceBuying.html.twig',array(
            'buyings'=> $buyings,
        ));
    }

    /**
     *
     * @Route("/Wishlist", name="wishlist")
     * @Method("GET")
     */
    public function wishlistAction()
    {

        $user = $this->getUser();

        if ($user == null){
            die;
        }

        $em = $this->getDoctrine()->getManager();

        $buyings = $em->getRepository('UserBundle:Buying')->findBy(array(
                'user' => $user
            )
        );

        $favorite = $user->getFavoriteAdvert();

        return $this->render('UserBundle:Default:monEspaceWhishlist.html.twig',array(
            'favorite'=> $favorite,
        ));
    }




}
