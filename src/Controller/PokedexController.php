<?php
// src/Controller/PokedexController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokedexController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('portada.html.twig');
    }

    #[Route('/Pokedex', name: 'Pokedex')]
    public function ajax(): Response
    {
        return $this->render('Pokedex/index.html.twig');
    }
}
