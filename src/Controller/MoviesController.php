<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieFormType;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Bundle\FrameworkBundle\Controller\redirectToRoute;

class MoviesController extends AbstractController
{

    private $em;
    private $movieRepository;

    public function __construct(MovieRepository $movieRepository, EntityManagerInterface $em)
    {
        $this->movieRepository = $movieRepository;
        $this->em = $em;
    }

    #[Route('/movies',methods:['GET'],name: 'movies')]
    public function index(): Response
    {
        $movies = $this->movieRepository->findAll();
        // dd($movies);

        return $this->render('movies/index.html.twig', ['movies' => $movies]);
    }


    #[Route('/movies/create',methods:['GET','POST'],name:'create_movie')]
    public function create(Request $request): Response
    {

        $movie = new Movie();
        $form = $this->createForm(MovieFormType::class, $movie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $newMovie = $form->getData();

            $imagePath = $form->get('ImagePath')->getData();
            if ($imagePath) {
                $newFileName = uniqid() . '.' . $imagePath->guessExtension();

                // dd($newFileName);
                try {
                    $imagePath->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads',
                        $newFileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $newMovie->setImagePath('/uploads/' . $newFileName);
            }
            $this->em->persist($newMovie);
            $this->em->flush();

            return $this->redirectToRoute('movies');
        }

        return $this->render('movies/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/movies/{id}',methods:['GET'], name: 'show_movie')]
    public function show($id): Response
    {
        $movies = $this->movieRepository->find($id);
        // dd($movies);

        return $this->render('movies/show.html.twig', ['movie' => $movies]);
    }

    #[Route('/movies/edit/{id}', name: 'edit_movie')]
    public function edit($id, Request $request): Response
    {

        $movie = $this->movieRepository->find($id);
        $form = $this->createForm(MovieFormType::class, $movie);

        $form->handleRequest($request);
        $imagePath = $form->get('ImagePath')->getData();

        // dd($imagePath);  

        if ($form->isSubmitted() && $form->isValid()) {
            if ($imagePath) {
                if ($movie->getImagePath() !== null) {
                    if (file_exists(
                        $this->getParameter('kernel.project_dir') . $movie->getImagePath()
                    )) {
                        $this->GetParameter('kernel.project_dir') . $movie->getImagePath();
                        $newFileName = uniqid() . '.' . $imagePath->guessExtension();

                        try {
                            $imagePath->move(
                                $this->getParameter('kernel.project_dir') . '/public/uploads',
                                $newFileName
                            );
                        } catch (FileException $e) {
                            return new Response($e->getMessage());
                        }
                        $movie->setImagePath('/uploads/' . $newFileName);


                        $this->em->flush();

                        return $this->redirectToRoute('movies');
                    }
                }
            } else {
                $movie->setName($form->get('name')->getData());
                $movie->setReleaseDate($form->get('releaseDate')->getData());

                $this->em->flush();
                return $this->redirectToRoute('movies');
            }
        }

        return $this->render('movies/edit.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/movies/delete/{id}',methods:['GET','DELETE'], name: 'delete_movie')]
    public function delete($id): Response
    {
        $movie = $this->movieRepository->find($id);

        // dd($movie);

        $this->em->remove($movie);
        $this->em->flush();

        return $this->redirectToRoute('movies');

        // dd($movies);

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
