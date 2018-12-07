<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController {
    /**
     * @Route("/creation", name="creation")
     */
    public function index() {
        return $this->render('creation/index.html.twig', [
            'controller_name' => 'CreationController',
        ]);
    }


    //---------------------------------------------------------
    /**
     * @Route("/creation/histoire", name="creer_histoire")
     */
    public function creerHistoire() {
        return $this->render('creation/creation_histoire.html.twig', [
            'controller_name' => 'CreationController',
        ]);
    }

    public function enregistrerHistoire() {
        // TODO
    }


    //---------------------------------------------------------

    /**
     * @Route("/creation/chapitre", name="creer_chapitre")
     */
    public function creerChapitre() {
        return $this->render('creation/creation_chapitre.html.twig', [
            'controller_name' => 'CreationController',
        ]);
    }

    public function enregistrerChapitre() {
        // TODO
    }


    //---------------------------------------------------------

    /**
     * @Route("/creation/suite", name="lier_chapitre")
     */
    public function lierChapitre() {
        return $this->render('creation/lier_chapitre.html.twig', [
            'controller_name' => 'CreationController',
        ]);
    }

    public function enregistrerLiaison() {
        // TODO
    }


}
