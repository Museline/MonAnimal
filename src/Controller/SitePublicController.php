<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitePublicController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
        return $this->render('sitepublic/index.html.twig', array('mainTitle' => 'Accueil', 'subtitle' => 'Partagez vos photos et découvrez-en de nouvelles !'));
    }
}