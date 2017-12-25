<?php

namespace AdvertBundle\Controller;

use AdvertBundle\Entity\Expertise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AdvertBundle\Entity\Advert;

/**
 * Expertise controller.
 *
 */
class ExpertiseController extends Controller
{


    /**
     * Deletes a expertise entity.
     *
     * @Route("/expertise/accept/{id}", name="accept_expertise")
     */
    public function acceptAction(Request $request, Expertise $expertise)
    {
        $user = $this->getUser();

        if ($user == null){
            die;
        }

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN') && !$this->get('security.authorization_checker')->isGranted('ROLE_EXPERT')) {
            die;
        }

        $em = $this->getDoctrine()->getManager();
        $expertise->setStatus("accepted");
        $expertise->setExpertisedBy($user);
        $user->addExpertise($expertise);
        $em->persist($expertise);
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('monEspaceExpertise');
    }

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


    /**
     * Lists all expertise entities.
     *
     * @Route("/expertise", name="expertise_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $expertises = $em->getRepository('AdvertBundle:Expertise')->findAll();

        return $this->render('expertise/index.html.twig', array(
            'expertises' => $expertises,
        ));
    }

    /**
     * Creates a new expertise entity.
     *
     * @Route("/expertise/new", name="expertise_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $expertise = new Expertise();
        $form = $this->createForm('AdvertBundle\Form\ExpertiseType', $expertise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($expertise);
            $em->flush();

            return $this->redirectToRoute('expertise_show', array('id' => $expertise->getId()));
        }

        return $this->render('expertise/new.html.twig', array(
            'expertise' => $expertise,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a expertise entity.
     *
     * @Route("/expertise/{id}", name="expertise_show")
     * @Method("GET")
     */
    public function showAction(Expertise $expertise)
    {
        $deleteForm = $this->createDeleteForm($expertise);

        return $this->render('expertise/show.html.twig', array(
            'expertise' => $expertise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing expertise entity.
     *
     * @Route("/expertise/{id}/edit", name="expertise_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Expertise $expertise)
    {
        $deleteForm = $this->createDeleteForm($expertise);
        $editForm = $this->createForm('AdvertBundle\Form\ExpertiseType', $expertise);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();


            //TODO: Create and save the pdf
            //TODO: status->finish
            //TODO: Add pdf path to expertise entity

            return $this->redirectToRoute('expertise_edit', array('id' => $expertise->getId()));
        }

        return $this->render('expertise/edit.html.twig', array(
            'expertise' => $expertise,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a expertise entity.
     *
     * @Route("/expertise/{id}", name="expertise_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Expertise $expertise)
    {
        $form = $this->createDeleteForm($expertise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($expertise);
            $em->flush();
        }

        return $this->redirectToRoute('expertise_index');
    }

    /**
     * Creates a form to delete a expertise entity.
     *
     * @param Expertise $expertise The expertise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Expertise $expertise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('expertise_delete', array('id' => $expertise->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
