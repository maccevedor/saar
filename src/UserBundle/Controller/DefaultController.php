<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     * @Route("/user/{id}/edit")
     */
     public function editUserAction($id)
     {
         $em = $this->getDoctrine()->getManager();

         $user = $em->getRepository('UserBundle:User')->find($id);

         if (!is_object($user)) {
             throw new AccessDeniedException('This user does not have access to this section.');
         }

         /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
         $formFactory = $this->get('fos_user.profile.form.factory');

         $form = $formFactory->createForm();
         $form->setData($user);
         $form->handleRequest($request);

         if ($form->isValid()) {
             /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
             $userManager = $this->get('fos_user.user_manager');
             $userManager->updateUser($user);

             $session = $this->getRequest()->getSession();
             $session->getFlashBag()->add('message', 'Successfully updated');
             $url = $this->generateUrl('matrix_edi_viewUser');
             $response = new RedirectResponse($url);

         }

         return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
             'form' => $form->createView()
         ));
     }
}
