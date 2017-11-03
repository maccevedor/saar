<?php

namespace UserBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController

{

   public function createNewUserEntity()

   {

       return $this->get('fos_user.user_manager')->createUser();

   }

   public function prePersistUserEntity($user)

   {
       //Se obtiene el valor del password y se encrypta
       $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
       $user->setPassword($encoder->encodePassword($user->getPassword(),$user->getSalt()));
       $this->get('fos_user.user_manager')->updateUser($user, false);

   }

   public function preUpdateUserEntity($user)

   {
       $this->get('fos_user.user_manager')->plainPassword = $password;
       $this->get('fos_user.user_manager')->updateUser($user, false);

   }

   public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
        $this->updatedAt = new \DateTime();

        return $this;
    }

}

?>
