<?php

namespace SaarBundle\Controller;

use SaarBundle\Entity\FormularioOpcion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Formularioopcion controller.
 *
 * @Route("formularioopcion")
 */
class FormularioOpcionController extends Controller
{
    /**
     * Lists all formularioOpcion entities.
     *
     * @Route("/", name="formularioopcion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formularioOpcions = $em->getRepository('SaarBundle:FormularioOpcion')->findAll();

        return $this->render('formularioopcion/index.html.twig', array(
            'formularioOpcions' => $formularioOpcions,
        ));
    }

    /**
     * Creates a new formularioOpcion entity.
     *
     * @Route("/new", name="formularioopcion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formularioOpcion = new Formularioopcion();
        $form = $this->createForm('SaarBundle\Form\FormularioOpcionType', $formularioOpcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formularioOpcion);
            $em->flush();

            return $this->redirectToRoute('formularioopcion_show', array('id' => $formularioOpcion->getId()));
        }

        return $this->render('formularioopcion/new.html.twig', array(
            'formularioOpcion' => $formularioOpcion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formularioOpcion entity.
     *
     * @Route("/{id}", name="formularioopcion_show")
     * @Method("GET")
     */
    public function showAction(FormularioOpcion $formularioOpcion)
    {
        $deleteForm = $this->createDeleteForm($formularioOpcion);

        return $this->render('formularioopcion/show.html.twig', array(
            'formularioOpcion' => $formularioOpcion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing formularioOpcion entity.
     *
     * @Route("/{id}/edit", name="formularioopcion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FormularioOpcion $formularioOpcion)
    {
        $deleteForm = $this->createDeleteForm($formularioOpcion);
        $editForm = $this->createForm('SaarBundle\Form\FormularioOpcionType', $formularioOpcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formularioopcion_edit', array('id' => $formularioOpcion->getId()));
        }

        return $this->render('formularioopcion/edit.html.twig', array(
            'formularioOpcion' => $formularioOpcion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a formularioOpcion entity.
     *
     * @Route("/{id}", name="formularioopcion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FormularioOpcion $formularioOpcion)
    {
        $form = $this->createDeleteForm($formularioOpcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formularioOpcion);
            $em->flush();
        }

        return $this->redirectToRoute('formularioopcion_index');
    }

    /**
     * Creates a form to delete a formularioOpcion entity.
     *
     * @param FormularioOpcion $formularioOpcion The formularioOpcion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FormularioOpcion $formularioOpcion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formularioopcion_delete', array('id' => $formularioOpcion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
