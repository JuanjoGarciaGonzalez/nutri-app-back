<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestApiController extends AbstractController
{
    #[Route('/api/test', name: 'api_test', methods: ['GET'])]
    public function test()
    {
        return new JsonResponse(['message' => 'Hello World!']);
    }
}