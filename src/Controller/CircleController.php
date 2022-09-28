<?php

namespace App\Controller;

use App\Repository\CircleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'app_circle', methods: ['GET', 'HEAD'])]
    /**
     * index
     *
     * @param  mixed $circleRepository
     * @return Response
     */
    public function index($radius): Response
    {
        $pi = 3.142;
        $surface = $pi * ($radius * $radius);
        $circumference = $pi * ($radius * $radius);
        $radius = (int)$radius;

        return $this->json([
            'type' => 'circle',
            'radius' => $radius,
            'surface' => $surface,
            'circumference' => $circumference
        ]);
    }
}
