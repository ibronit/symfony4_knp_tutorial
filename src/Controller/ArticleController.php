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
        $title = ucfirst(str_replace('-', ' ', $slug));
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', ['title' => $title, 'comments' => $comments]);
    }
}