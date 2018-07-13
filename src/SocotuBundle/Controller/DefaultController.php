<?php

namespace SocotuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function indexAction()
    {
        return $this->render('@Socotu/socotu/index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/services", name="services")
     */
    public function servicesAction()
    {
        return $this->render('@Socotu/socotu/service.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/transit", name="transit")
     */
    public function transitAction()
    {
        return $this->render('@Socotu/socotu/transit.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/agence_maritime", name="agence_maritime")
     */
    public function maritimeAction()
    {
        return $this->render('@Socotu/socotu/maritime.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/entreposage", name="entreposage")
     */
    public function entreposageAction()
    {
        return $this->render('@Socotu/socotu/entreposage.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/transport", name="transport")
     */
    public function transportAction()
    {
        return $this->render('@Socotu/socotu/transport.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/apropos", name="apropos")
     */
    public function aproposAction()
    {
        return $this->render('@Socotu/socotu/apropos.html.twig', array(
            // ...
        ));
    }
}
