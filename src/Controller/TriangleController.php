<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', name: 'app_triangle', methods: ['GET', 'HEAD'])]
    public function index($a, $b, $c): JsonResponse
    {
        // using the heron's formula
        $semi_parameter = (($a + $b + $c) / 2);
        $surface = round(sqrt($semi_parameter * (($semi_parameter - $a) * ($semi_parameter - $b) * ($semi_parameter - $c))));
        $circumference = ($a + $b + $c);
        $a = (int)$a;
        $b = (int)$b;
        $c = (int)$c;
        return $this->json([
            'type' => 'circle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => $surface,
            'circumference' => $circumference
        ]);
    }
}
