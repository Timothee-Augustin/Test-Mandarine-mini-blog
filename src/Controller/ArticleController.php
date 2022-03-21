<?php
// src/Controller/ArticleController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


Class ArticleController extends AbstractController
{
    /**
     * @Route("/article/", name="article_index")
     */
    public function index(): Response
    {
      return $this->render('article/index.html.twig', [
        'website' => 'Article', 
     ]);
    }
}