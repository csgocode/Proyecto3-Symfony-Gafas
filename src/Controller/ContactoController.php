<?php

namespace App\Controller;

use App\Entity\Contacto;
use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ContactoController extends AbstractController
{
    #[Route('/contacto', name: 'contacto')]
public function contact(ManagerRegistry $doctrine, Request $request): Response
{
    $contact = new Contacto();
    $form = $this->createForm(ContactFormType::class, $contact);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $contacto = $form->getData();    
        $entityManager = $doctrine->getManager();    
        $entityManager->persist($contacto);
        $entityManager->flush();
        return $this->redirectToRoute('contacto', []);
    }
    return $this->render('pagina/contacto.html.twig', array(
        'form' => $form->createView()    
    ));
}


}
