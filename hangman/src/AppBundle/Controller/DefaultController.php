<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/game", name="game")
     */
    public function gameAction()
    {
        return $this->render('game.html.twig');
    }

    /**
     * @Route("/won", name="won")
     */
    public function wonAction()
    {
        return $this->render('won.html.twig');
    }

    /**
     * @Route("/failed", name="failed")
     */
    public function failedAction()
    {
        return $this->render('failed.html.twig');
    }

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

    public function testimonialsAction()
    {
        return $this->render('_testimonials.html.twig', [
            'testimonials' => [
                'John Doe' => 'I love this game, so addictive!',
                'Martin Durand' => 'Best web application ever',
                'Paul Smith' => 'Awesomeness!',
            ],
        ]);
    }

    /**
     * @Route(
         "/birthday/{month}/{day}",
         requirements={
           "month" = "(0[0-9])|(1[0-2])",
           "day" = "(0[1-9])|([1-2][0-9])|(3[0-1])",
         }
       )
     */
    public function birthdayAction($month, $day)
    {
        $weekdays = [];
        $birthday = new \DateTime('2017-'.$month.'-'.$day);
        for ($i = 0; $i < 10; $i++) {
            $birthday->modify('+'.$i.' years');
            $weekdays[2017 + $i] = $birthday->format('l');
        }

        return $this->render('examples/birthday.html.twig', ['weekdays' => $weekdays]);
    }
}
