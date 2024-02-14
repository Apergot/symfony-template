<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/status', name: 'server_status')]
    public function getStatus(): JsonResponse
    {
        return new JsonResponse(['status' => 'OK'], Response::HTTP_OK);
    }
}