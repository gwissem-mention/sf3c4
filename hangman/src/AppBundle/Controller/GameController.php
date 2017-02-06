<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/game")
 */
class GameController extends Controller
{
    /**
     * @Route("/", name="game")
     */
    public function homeAction()
    {
        return $this->render('game/home.html.twig');
    }

    /**
     * @Route("/won", name="won")
     */
    public function wonAction()
    {
        return $this->render('game/won.html.twig');
    }

    /**
     * @Route("/failed", name="failed")
     */
    public function failedAction()
    {
        return $this->render('game/failed.html.twig');
    }

    public function testimonialsAction()
    {
        return $this->render('game/_testimonials.html.twig', [
            'testimonials' => [
                'John Doe' => 'I love this game, so addictive!',
                'Martin Durand' => 'Best web application ever',
                'Paul Smith' => 'Awesomeness!',
            ],
        ]);
    }
}
