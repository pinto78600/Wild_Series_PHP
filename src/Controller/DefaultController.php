<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index() : Response{
        return $this->render('wild/home_page.html.twig',[
            'homepage' => 'Welcome',
        ]);
    }
}
