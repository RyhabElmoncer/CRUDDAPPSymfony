<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaRedirectionController extends AbstractController
{

 #[Route('/redirect', name:'redirection')]
 
public function maRedirection()
{
    return $this->redirectToRoute('calcul_somme', ['b' => 30, 'a' => -20]); 
} 
}
