<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GaleryController extends AbstractController
{
    /**
     * @Route("/galleria", name="galery")
     */
    public function index()
    {
        return $this->render('galery/index.html.twig', [
            'controller_name' => 'GaleryController',
        ]);
    }
}
