<?php

namespace App\Controller;

use App\Entity\BugEntity;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BugController extends AbstractController
{
    #[Route('/bug', name: 'app_bug')]
    public function index(
        #[MapEntity(mapping: [
            'location_id' => 'id',
        ])] BugEntity $location,
    ): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BugController.php',
        ]);
    }
}
