<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
    // public function index(EntityManagerInterface $em): Response
    // {
    //     // return $this->json([
    //     //     'message' => 'Welcome to your new controller!',
    //     //     'path' => 'src/Controller/MoviesController.php',
    //     // ]);

    //     $repository = $em->getRepository(Movie::class);

    //     $movie = $repository->findAll();
    //     dd($movie);


    //     return $this->render('index.html.twig');
    // }

}
