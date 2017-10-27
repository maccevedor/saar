<?php

namespace SaarBundle\Controller;

use SaarBundle\Entity\FormularioDetalle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Formulariodetalle controller.
 *
 * @Route("formulariodetalle")
 */
class FormularioDetalleController extends Controller
{
    /**
     * Lists all formularioDetalle entities.
     *
     * @Route("/", name="formulariodetalle_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formularioDetalles = $em->getRepository('SaarBundle:FormularioDetalle')->findAll();

        return $this->render('formulariodetalle/index.html.twig', array(
            'formularioDetalles' => $formularioDetalles,
        ));
    }

    /**
     * Creates a new formularioDetalle entity.
     *
     * @Route("/new", name="formulariodetalle_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formularioDetalle = new Formulariodetalle();
        $form = $this->createForm('SaarBundle\Form\FormularioDetalleType', $formularioDetalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formularioDetalle);
            $em->flush();

            return $this->redirectToRoute('formulariodetalle_show', array('id' => $formularioDetalle->getId()));
        }

        return $this->render('formulariodetalle/new.html.twig', array(
            'formularioDetalle' => $formularioDetalle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formularioDetalle entity.
     *
     * @Route("/{id}", name="formulariodetalle_show")
     * @Method("GET")
     */
    public function showAction(FormularioDetalle $formularioDetalle)
    {
        $deleteForm = $this->createDeleteForm($formularioDetalle);

        return $this->render('formulariodetalle/show.html.twig', array(
            'formularioDetalle' => $formularioDetalle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing formularioDetalle entity.
     *
     * @Route("/{id}/edit", name="formulariodetalle_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FormularioDetalle $formularioDetalle)
    {
        $deleteForm = $this->createDeleteForm($formularioDetalle);
        $editForm = $this->createForm('SaarBundle\Form\FormularioDetalleType', $formularioDetalle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formulariodetalle_edit', array('id' => $formularioDetalle->getId()));
        }

        return $this->render('formulariodetalle/edit.html.twig', array(
            'formularioDetalle' => $formularioDetalle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a formularioDetalle entity.
     *
     * @Route("/{id}", name="formulariodetalle_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FormularioDetalle $formularioDetalle)
    {
        $form = $this->createDeleteForm($formularioDetalle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formularioDetalle);
            $em->flush();
        }

        return $this->redirectToRoute('formulariodetalle_index');
    }

    /**
     * Creates a form to delete a formularioDetalle entity.
     *
     * @param FormularioDetalle $formularioDetalle The formularioDetalle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FormularioDetalle $formularioDetalle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formulariodetalle_delete', array('id' => $formularioDetalle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
