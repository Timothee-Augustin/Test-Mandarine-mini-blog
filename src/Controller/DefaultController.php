<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


Class DefaultController extends AbstractController
{
  /**
   * @Route("/", name="app_index")
   */
  public function index(ArticleRepository $articleRepository): Response
  {
      return $this->render('article/index.html.twig', [
          'articles' => $articleRepository->findAll(),
      ]);
  }
}