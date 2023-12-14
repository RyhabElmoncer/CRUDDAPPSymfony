<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class DemoController extends AbstractController
{
   #[Route('/calcul/somme/{a}/{b}', name: 'calcul_somme')]
    public function somme(int $a=0, int $b=0): Response
    {
        $s=$a+$b;
        return new Response ("la somme de  $a  et $b = $s") ; 
    }
    #[Route('/calcul/soustraction/{a}/{b}', name: 'calcul_soustraction')]
    public function soustraction(int $a=0, int $b=0) : Response
    {
      
        $s=$a-$b;
        return new Response ("la soustraction de  $a  et $b = $s") ; 
    }
    #[Route('/calcul/multiplication/{a}/{b}', name: 'calcul_multiplication')]
    public function multiplication(int $a=0, int $b=0) : Response
    {
      
        $s=$a*$b;
        return new Response ("la multiplication de $a  et $b = $s") ; 
    }
}
