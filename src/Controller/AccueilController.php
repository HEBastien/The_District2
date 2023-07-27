<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PlatRepository;
use App\Repository\LibelleRepository;

class AccueilController extends AbstractController
{
    private $platRepo;
    private $libelleRepo;
    
    public function __construct(PlatRepository $platRepo, LibelleRepository $libelleRepo)
    {
        $this->platRepo = $platRepo;
        $this->libelleRepo = $libelleRepo;
    }


    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        $libelle = $this->libelleRepo->findALL();
        $plat = $this->platRepo->findALL();
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'libelle' => $libelle ,
            'plat' => $plat
        ]);
    }

    #[Route('/categorie', name: 'app_categorie')]
    public function categorie(): Response
    {
        return $this->render('accueil/categorie.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
