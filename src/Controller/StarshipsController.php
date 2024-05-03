<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class StarshipsController extends AbstractController
{
   #[Route('/Starships', name: 'Starships')]
   public function ajax(): Response
   {
       return $this->render('starships/index.html.twig');
   }
}