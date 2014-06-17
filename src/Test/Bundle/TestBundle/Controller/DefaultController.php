<?php

namespace Test\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array("name" => "Cyrille");
    }
    
    /**
     * @Route("/hello/{name}", name="home")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }
}