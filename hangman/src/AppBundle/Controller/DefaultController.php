<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route(
     *   "/hello/{name}", 
     *   name="hello_world", 
     *   defaults={"name": "Stranger"}
     * )
     */
    public function helloAction($name)
    {
        return $this->render('examples/hello.html.twig', ['name' => $name]);
    }
}
