<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WildController extends AbstractController
{
     /**
     * @Route("/wild", name="wild_index")
    */
    public function index() :Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * @Route("/wild/show/{slug?Aucune série sélectionnée, veuillez choisir une série}", name="wild_show")
     */
    public function show($slug): Response
    {
        return $this->render('wild/show.html.twig', [
            'slug' => (ucwords(str_replace('-',' ',$slug))),
        ]);
    }
}