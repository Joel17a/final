<?php
// src/Controller/DbzController.php

namespace App\Controller;

// src/Controller/DbzController.php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DbzController extends AbstractController
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }
    
    #[Route('/dbz', name: 'dbz')]  // Ruta para acceder a los personajes
    public function load(): Response
    {
        try {
            // Hacer una solicitud GET a la API de Dragon Ball para obtener los personajes
            $response = $this->httpClient->request('GET', 'https://dragonball-api.com/api/characters');
            $data = $response->toArray();
            
            // Extraer la sección 'items' para obtener los personajes
            $characters = $data['items'];

            return $this->render('dragonball/dragonball.html.twig', [
                'characters' => $characters,
            ]);
        } catch (\Exception $e) {
            return new Response("Error al cargar los personajes: " . $e->getMessage());
        }
    }
}

