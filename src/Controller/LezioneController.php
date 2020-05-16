<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LezioneController extends AbstractController
{
    /**
     * @Route("/lezione", name="lezione")
     */
    public function index()
    {
        return $this->render('lezione/index.html.twig', [
            'controller_name' => 'LezioneController',
        ]);
    }
}
