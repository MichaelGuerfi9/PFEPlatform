<?php

namespace AdvertBundle\Controller;

use AdvertBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Advert controller.
 *
 * @Route("/")
 */
class AdvertController extends Controller
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

        $csrfToken = $this->has('security.csrf.token_manager')
            ? $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue()
            : null;

        $em = $this->getDoctrine()->getManager();

        $adverts = $em->getRepository('AdvertBundle:Advert')->findBy(array('reservedBy'=>null),array('id'=>'DESC'),3);

        return $this->render('AdvertBundle:Advert:index.html.twig', array(
            'adverts' => $adverts,
            'csrfToken' => $csrfToken,
        ));
    }

    /**
     * Creates a new advert entity.
     *
     * @Route("/new", name="advert_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $advert = new Advert();
        $user = $this->getUser();

        if ($user == null){
            die;
        }

        $form = $this->createForm('AdvertBundle\Form\AdvertType', $advert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $advert->setCreatedBy($user);
            $em->persist($advert);
            $em->flush();

            return $this->redirectToRoute('advert_show', array('id' => $advert->getId()));
        }

        return $this->render('AdvertBundle:Advert:new.html.twig', array(
            'advert' => $advert,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a advert entity.
     *
     * @Route("/advert/{id}", name="advert_show")
     * @Method("GET")
     */
    public function showAction(Advert $advert)
    {
        $deleteForm = $this->createDeleteForm($advert);

        return $this->render('AdvertBundle:Advert:show.html.twig', array(
            'advert' => $advert,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing advert entity.
     *
     * @Route("/{id}/edit", name="advert_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Advert $advert)
    {
        $deleteForm = $this->createDeleteForm($advert);
        $editForm = $this->createForm('AdvertBundle\Form\AdvertType', $advert);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('advert_edit', array('id' => $advert->getId()));
        }

        return $this->render('AdvertBundle:Advert:edit.html.twig', array(
            'advert' => $advert,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a advert entity.
     *
     * @Route("/{id}", name="advert_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Advert $advert)
    {
        $form = $this->createDeleteForm($advert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($advert);
            $em->flush();
        }

        return $this->redirectToRoute('advert_index');
    }

    /**
     * Creates a form to delete a advert entity.
     *
     * @param Advert $advert The advert entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Advert $advert)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('advert_delete', array('id' => $advert->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * @return null|object
     * @Route("/rent/{id}", name="advert_rent")
     */
    public function rentAdvert(Advert $advert)
    {

        $user = $this->getUser();

        if($user && !$advert->getReservedBy()){
            $user->addReservedCar($advert);
            $advert->setReservedBy($user);

            $em = $this->getDoctrine()->getManager();

            $em->persist($advert);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('advert_show', array('id' => $advert->getId()));

        }else{
            echo "error";
            die;
        }

    }

    /**
     * Lists all advert entities.
     *
     * @Route("/list", name="list")
     * @Method("GET")
     */
    public function listAction()
    {

        $em = $this->getDoctrine()->getManager();

        $adverts = $em->getRepository('AdvertBundle:Advert')->findAll();

        return $this->render('AdvertBundle:Advert:list.html.twig',array(
            'adverts'=> $adverts,
        ));
    }



    /**
     *
     * @Route("/payment/{id}/{params}", name="payment")
     * @Method({"GET", "POST"})
     */
    public function paymentAction(Advert $advert, Request $request, $params=null)
    {


        //if ($request->isMethod('POST')){

        if ($params != null){


            echo 'ta mere';die;


        }


        $em = $this->getDoctrine()->getManager();

        return $this->render('AdvertBundle:Advert:payment.html.twig',array(
            'advert'=> $advert,
        ));
    }



    function construit_url_paypal()
    {
        $api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?'; // Site de l'API PayPal. On ajoute déjà le ? afin de concaténer directement les paramètres.
        $version = 56.0; // Version de l'API

        $user = 'julienbrandin-facilitator_api1.sfr.fr'; // Utilisateur API
        $pass = 'VDT5SNRFDTV5YCP6'; // Mot de passe API
        $signature = 'AFcWxV21C7fd0v3bYYYRCpSSRl31A3LeItrytN1I6H2pPfGwOsNkZR96'; // Signature de l'API

        $api_paypal = $api_paypal.'VERSION='.$version.'&USER='.$user.'&PWD='.$pass.'&SIGNATURE='.$signature; // Ajoute tous les paramètres

        return 	$api_paypal; // Renvoie la chaîne contenant tous nos paramètres.
    }



}
