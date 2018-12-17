<?php

namespace App\Controller;

use App\Entity\Histoire;
use App\Form\HistoireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index", methods="GET")
     */
    public function index(): Response
    {
        if($this->isGranted('ROLE_USER') === true){
            return $this->redirectToRoute('histoire_index');
        }
        return $this->render('home/index.html.twig');
    }
}
