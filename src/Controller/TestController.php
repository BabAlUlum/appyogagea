<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\BrowserKit\Response;
use App\Form\FormcontactType;
use App\Entity\Formcontact;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(Request $request)

    {
        $contact    = new Formcontact();
        $form       = $this->createForm(FormcontactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'Message envoyé !');
    
            return $this->redirectToRoute('test');
        }

        return $this->render('test/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    
}
