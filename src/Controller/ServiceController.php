<?php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse; // Add this line
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function showService($name): Response
    {
        return $this->render('service/showService.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route("/go-to-index", name:"go_to_index")]
    public function goToIndex(): RedirectResponse
    {
        // Redirect to the index action of the HomeController
        return $this->redirectToRoute('home_index');
    }
}
