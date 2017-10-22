<?php

namespace SaarBundle\Controller;

use SaarBundle\Entity\Formulario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Formulario controller.
 *
 * @Route("formulario")
 */
class FormularioController extends Controller
{
    /**
     * Lists all formulario entities.
     *
     * @Route("/", name="formulario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formularios = $em->getRepository('SaarBundle:Formulario')->findAll();

        return $this->render('formulario/index.html.twig', array(
            'formularios' => $formularios,
        ));
    }

    /**
     * Creates a new formulario entity.
     *
     * @Route("/new", name="formulario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formulario = new Formulario();
        $form = $this->createForm('SaarBundle\Form\FormularioType', $formulario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formulario);
            $em->flush();

            return $this->redirectToRoute('formulario_show', array('id' => $formulario->getId()));
        }

        return $this->render('formulario/new.html.twig', array(
            'formulario' => $formulario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formulario entity.
     *
     * @Route("/{id}", name="formulario_show")
     * @Method("GET")
     */
    public function showAction(Formulario $formulario)
    {
        $deleteForm = $this->createDeleteForm($formulario);

        return $this->render('formulario/show.html.twig', array(
            'formulario' => $formulario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing formulario entity.
     *
     * @Route("/{id}/edit", name="formulario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Formulario $formulario)
    {
        $deleteForm = $this->createDeleteForm($formulario);
        $editForm = $this->createForm('SaarBundle\Form\FormularioType', $formulario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formulario_edit', array('id' => $formulario->getId()));
        }

        return $this->render('formulario/edit.html.twig', array(
            'formulario' => $formulario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a formulario entity.
     *
     * @Route("/{id}", name="formulario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Formulario $formulario)
    {
        $form = $this->createDeleteForm($formulario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formulario);
            $em->flush();
        }

        return $this->redirectToRoute('formulario_index');
    }

    /**
     * Creates a form to delete a formulario entity.
     *
     * @param Formulario $formulario The formulario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formulario $formulario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formulario_delete', array('id' => $formulario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
