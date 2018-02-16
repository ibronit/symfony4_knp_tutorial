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
     */
    public function show(string $slug)
    {
        return new Response(sprintf('You asked for see article: %s', $slug));
    }
}