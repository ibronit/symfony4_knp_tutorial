<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homePage()
    {
        return new Response('Its a traaap!');
    }

    /**
     * @Route("/show/{slug}")
     *
     * @param string $slug
     *
     * @return Response
     */
    public function show(string $slug)
    {
        return $this->render('article/show.html.twig', ['slug' => $slug]);
    }
}