<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VisualisationController extends AbstractController
{
    /**
     * @Route("/", name="visualisation")
     */
    public function index()
    {
        return $this->render('visualisation/index.html.twig', [
            'controller_name' => 'VisualisationController',
        ]);
    }
}
